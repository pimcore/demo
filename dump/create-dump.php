<?php

include __DIR__ . "/../vendor/autoload.php";

\Pimcore\Bootstrap::setProjectRoot();
\Pimcore\Bootstrap::bootstrap();
\Pimcore\Bootstrap::startupCli();


// get tables which are already in install.sql
$installSql = file_get_contents(PIMCORE_PATH . '/bundles/InstallBundle/dump/install.sql');
preg_match_all('/CREATE TABLE `(.*)`/', $installSql, $matches);
$existingTables = $matches[1];

$db = \Pimcore\Db::get();

if (isset($_SERVER['argv'][1])) {
    $config = new \Doctrine\DBAL\Configuration();
    $connectionParams = [
        'url' => $_SERVER['argv'][1],
        'wrapperClass' => '\Pimcore\Db\Connection'
    ];
    $db = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
}


$tablesRaw = $db->fetchAllAssociative('SHOW FULL TABLES');

$views = [];
$tables = [];

foreach ($tablesRaw as $table) {
    if ($table['Table_type'] == 'VIEW') {
        $views[]  = current($table);
    } else {
        $tables[] = current($table);
    }
}

$dumpData = "\nSET NAMES utf8mb4;\n\n";

// dump table schema, without the tables in install.sql
foreach ($tables as $name) {
    if (in_array($name, $existingTables)) {
        continue;
    }

    $dumpData .= "\n\n";
    $dumpData .= 'DROP TABLE IF EXISTS `' . $name . '`;';
    $dumpData .= "\n";

    $tableData = $db->fetchAssociative('SHOW CREATE TABLE ' . $name);

    $dumpData .= $tableData['Create Table'] . ';';

    $dumpData .= "\n\n";
}

$finalDest = __DIR__ . '/data-0-bootstrap.sql';
file_put_contents($finalDest, $dumpData);
$dumpFiles[] = $finalDest;

$tableBlacklist = [
    'application_logs',
    'cache',
    'cache_items',
    'classes',
    'cache_tags',
    'edit_lock',
    'email_log',
    'http_error_log',
    'locks',
    'lock_keys',
    'tmp_store',
    'targeting_storage',
    'tracking_events',
    'versions'
];

$insertIgnoreTables = [
    'migration_versions'
];

// dump data
foreach ($tables as $name) {

    $dumpData = "\nSET NAMES utf8mb4;\n\n";

    if (strstr($name, "application_logs") || in_array($name, $tableBlacklist)) {
        continue;
    }

    $tableColumns = [];
    // skip columns to dump, for exmple when they are virtually generated
    $skipColumns = [];
    $data = $db->fetchAllAssociative('SHOW COLUMNS FROM ' . $name);

    foreach ($data as $dataRow) {
        if ($dataRow['Extra'] == "VIRTUAL GENERATED"){
            $skipColumns[] = $dataRow['Field'];
            continue;
        }
        $tableColumns[] = $db->quoteIdentifier($dataRow['Field']);
    }

    $condition = '';
    if ($name === 'users') {
        $condition = ' WHERE id != 0';
    }
    if (
        str_starts_with($name, 'translations_')
        && in_array($db->quoteIdentifier('key'), $tableColumns)
        && in_array($db->quoteIdentifier('text'), $tableColumns)
    ) {
        $condition = ' WHERE text != ""';
    }

    $tableData = $db->fetchAllAssociative('SELECT * FROM ' . $name . $condition);

    $insertStatement = 'INSERT INTO';
    if(in_array($name, $insertIgnoreTables)) {
        $insertStatement = 'INSERT IGNORE INTO';
    }

    foreach ($tableData as $row) {
        $cells = [];
        foreach ($row as $columnKey => $cell) {
            if (in_array($columnKey, $skipColumns)){
                continue;
            }
            if (is_string($cell)) {
                $cell = $db->quote($cell);
            } elseif ($cell === null) {
                $cell = 'NULL';
            }

            $cells[] = $cell;
        }

        $dumpData .= sprintf(
            $insertStatement . " %s (%s) VALUES (%s);\n",
            $name,
            implode(',', $tableColumns),
            implode(',', $cells)
        );
    }

    $finalDest = __DIR__ . '/data-1-' . $name . '.sql';
    file_put_contents($finalDest, $dumpData);
    $dumpFiles[] = $finalDest;

}

$dumpData = "\nSET NAMES utf8mb4;\n\n";

foreach ($views as $name) {
    // dump view structure
    $dumpData .= "\n\n";
    $dumpData .= 'DROP VIEW IF EXISTS `' . $name . '`;';
    $dumpData .= "\n";

    try {
        $viewData = $db->fetchAssociative('SHOW CREATE VIEW ' . $name);
        $dumpData .= $viewData['Create View'] . ';';
    } catch (\Exception $e) {
        echo $e->getMessage() . "\n";
    }
}

// remove user specific data
$dumpData = preg_replace('/DEFINER(.*)DEFINER/i', '', $dumpData);
$dumpData .= "\n";

$finalDest = __DIR__ . '/data-2-views.sql';
file_put_contents($finalDest, $dumpData);
$dumpFiles[] = $finalDest;

echo "Dumps are here: \n" . implode("\n", $dumpFiles) . "\n";

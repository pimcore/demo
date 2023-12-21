#!/bin/bash
# to be able to run this script, execute the following: 
# chmod ug+x bin/*

# Rebuild classes (assuming pimcore:deployment:classes-rebuild)
echo "Rebuilding classes..."
php bin/console pimcore:deployment:classes-rebuild --create-classes

echo "Database migrations..."
php bin/console doctrine:migrations:migrate
# @todo configure it for all used bundeles

echo "Composer install..."
composer install

# Navigate to the project root directory
#cd "$(dirname "$0")/.."
# Rebuild JavaScript files
echo "Rebuilding JavaScript files..."
#cd bin
#npm install
#npm run build

# Rebuild Twig files
echo "Rebuilding Twig files..."
php bin/console cache:clear
php bin/console assetic:dump

echo "Post-merge task is Done."

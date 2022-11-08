DROP FUNCTION IF EXISTS PLUGIN_CMF_COLLECT_OBJECT_SEGMENT_ASSIGNMENTS;

CREATE FUNCTION PLUGIN_CMF_COLLECT_OBJECT_SEGMENT_ASSIGNMENTS(elementIdent INT) RETURNS TEXT
  READS SQL DATA
  BEGIN
    DECLARE segmentIds TEXT;
    DECLARE elementExists TINYINT;
    DECLARE breaks TINYINT;

    SELECT `segments` FROM `plugin_cmf_segment_assignment` WHERE `elementId` = elementIdent AND `elementType` = 'object' INTO segmentIds;
    SELECT COUNT(*) FROM `plugin_cmf_segment_assignment` WHERE `elementId` = elementIdent AND `elementType` = 'object' INTO elementExists;
    SELECT `breaksInheritance` FROM `plugin_cmf_segment_assignment` WHERE `elementId` = elementIdent AND `elementType` = 'object' INTO breaks;

    WHILE (elementExists = 0 OR breaks IS NULL OR breaks <> 1) AND elementIdent > 1 DO
      SELECT `parentId`  FROM `objects` WHERE `id` = elementIdent INTO elementIdent;
      SELECT CONCAT_WS(',', segmentIds, (SELECT `segments` FROM `plugin_cmf_segment_assignment` WHERE `elementId` = elementIdent AND `elementType` = 'object')) INTO segmentIds;
      SELECT COUNT(*) FROM `plugin_cmf_segment_assignment` WHERE `elementId` = elementIdent AND `elementType` = 'object' INTO elementExists;
      SELECT `breaksInheritance` INTO breaks FROM `plugin_cmf_segment_assignment` WHERE `elementId` = elementIdent AND `elementType` = 'object';
    END WHILE;

    RETURN segmentIds;
  END;
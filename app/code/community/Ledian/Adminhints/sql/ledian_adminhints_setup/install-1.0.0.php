<?php

$installer = $this;
$installer->startSetup();
$installer->run("
    INSERT INTO core_config_data (scope, scope_id, path, value)
    VALUES ('default', 0, 'dev/debug/template_hints', 0),
    ('default', 0, 'dev/debug/template_hints_blocks', 0)
");
$installer->endSetup();
<?php
// delete data addon dir
$dataDir = rex_babelfish_utils::getDataAddonDir();
rex_babelfish_utils::rrmdir($dataDir);

$REX['ADDON']['install']['babelfish'] = false;


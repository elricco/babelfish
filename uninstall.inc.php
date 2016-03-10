<?php
// delete data addon dir
if(!OOAddon::isActivated('babelfish'))
{
  require($REX['INCLUDE_PATH'] . '/addons/babelfish/classes/class.rex_babelfish_utils.inc.php');
}
rex_babelfish_utils::removeDataAddonDir();

$REX['ADDON']['install']['babelfish'] = false;


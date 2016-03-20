<?php
// delete data addon dir
if(!OOAddon::isActivated('babelfish'))
{
  require($REX['INCLUDE_PATH'] . '/addons/babelfish/classes/class.babelfish_utils.inc.php');
}
babelfish_utils::removeDataAddonDir();

$REX['ADDON']['install']['babelfish'] = false;


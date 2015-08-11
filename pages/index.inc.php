<?php
// post vars
$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');

// if no subpage specified, use this one
if ($subpage == '') {
	$subpage = 'start';
}

// layout top
require($REX['INCLUDE_PATH'] . '/layout/top.php');

// title
rex_title($REX['ADDON']['name']['babelfish'] . ' <span style="font-size:14px; color:silver;">' . $REX['ADDON']['version']['babelfish'] . '</span>', $REX['ADDON']['babelfish']['SUBPAGES']);

// include subpage
include($REX['INCLUDE_PATH'] . '/addons/babelfish/pages/' . $subpage . '.inc.php');

// layout bottom
require($REX['INCLUDE_PATH'] . '/layout/bottom.php');
?>

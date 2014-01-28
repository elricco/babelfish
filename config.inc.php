<?php
// init addon
$REX['ADDON']['name']['babelfish'] = 'Babelfish';
$REX['ADDON']['page']['babelfish'] = 'babelfish';
$REX['ADDON']['version']['babelfish'] = '1.0.0';
$REX['ADDON']['author']['babelfish'] = 'redaxo.org';
$REX['ADDON']['supportpage']['babelfish'] = 'forum.redaxo.org';
$REX['ADDON']['perm']['babelfish'] = 'babelfish[]';

// permissions
$REX['PERM'][] = 'babelfish[]';

// includes
require($REX['INCLUDE_PATH'] . '/addons/babelfish/settings.inc.php');
require($REX['INCLUDE_PATH'] . '/addons/babelfish/classes/class.rex_babelfish_utils.inc.php');

if ($REX['REDAXO']) {
	// add lang file
	$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/babelfish/lang/');

	// add subpages
	$REX['ADDON']['babelfish']['SUBPAGES'] = array(
		array('', $I18N->msg('babelfish_start')),
		array('settings', $I18N->msg('babelfish_settings')),
		array('setup', $I18N->msg('babelfish_setup')),
		array('help', $I18N->msg('babelfish_help'))
	);
}
?>

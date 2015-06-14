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

// add lang file
if ($REX['REDAXO']) {
	$I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/babelfish/lang/');
}

// includes
require($REX['INCLUDE_PATH'] . '/addons/babelfish/classes/class.rex_babelfish_utils.inc.php');

// default settings (user settings are saved in data dir!)
$REX['ADDON']['babelfish']['settings'] = array(
	'foo' => 'bar',
	'foo2' => true,
);

// overwrite default settings with user settings
rex_babelfish_utils::includeSettingsFile();

if ($REX['REDAXO']) {
	// add subpages
	$REX['ADDON']['babelfish']['SUBPAGES'] = array(
		array('', $I18N->msg('babelfish_start')),
		array('settings', $I18N->msg('babelfish_settings')),
		array('setup', $I18N->msg('babelfish_setup')),
		array('help', $I18N->msg('babelfish_help'))
	);

	// add css/js files to page header
	if (rex_request('page') == 'babelfish') {
		rex_register_extension('PAGE_HEADER', 'rex_babelfish_utils::appendToPageHeader');
	}
}
?>

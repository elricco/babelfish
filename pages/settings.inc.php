<?php

$configFile = $REX['INCLUDE_PATH'] . '/addons/dummy/settings.inc.php';

if (rex_request('func', 'string') == 'update') {
	$foo = trim(rex_request('foo', 'string'));

	$REX['ADDON']['dummy']['settings']['foo'] = $foo;

	$content = '
		$REX[\'ADDON\'][\'dummy\'][\'settings\'][\'foo\'] = "' . $foo . '";
	';

	if (rex_replace_dynamic_contents($configFile, str_replace("\t", "", $content)) !== false) {
		echo rex_info($I18N->msg('dummy_configfile_update'));
	} else {
		echo rex_warning($I18N->msg('dummy_configfile_nosave'));
	}
}

if (!is_writable($configFile)) {
	echo rex_warning($I18N->msg('dummy_configfile_nowrite', $configFile));
}
?>

<div class="rex-addon-output">
	<div class="rex-form">

		<h2 class="rex-hl2"><?php echo $I18N->msg('dummy_settings'); ?></h2>

		<form action="index.php" method="post">

			<fieldset class="rex-form-col-1">
				<div class="rex-form-wrapper">
					<input type="hidden" name="page" value="dummy" />
					<input type="hidden" name="subpage" value="" /> <!-- put "settings" in here if settings page is not first page in addon menu -->
					<input type="hidden" name="func" value="update" />

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-text">
							<label for="foo"><?php echo $I18N->msg('dummy_settings_foo'); ?></label>
							<input type="text" value="<?php echo $REX['ADDON']['dummy']['settings']['foo']; ?>" id="foo" name="foo" class="rex-form-text">
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-submit">
							<input type="submit" class="rex-form-submit" name="sendit" value="<?php echo $I18N->msg('dummy_settings_save'); ?>" />
						</p>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>




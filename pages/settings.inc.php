<?php

$page = rex_request('page', 'string');
$subpage = rex_request('subpage', 'string');
$func = rex_request('func', 'string');

// save settings
if ($func == 'update') {
	$settings = (array) rex_post('settings', 'array', array());
	
	// type conversion
	foreach ($REX['ADDON']['babelfish']['settings'] as $key => $value) {
		if (isset($settings[$key])) {
			$settings[$key] = rex_babelfish_utils::convertVarType($value, $settings[$key]);
		}
	}

	// replace settings
	$REX['ADDON']['babelfish']['settings'] = array_merge((array) $REX['ADDON']['babelfish']['settings'], $settings);

	// update settings file
	rex_babelfish_utils::updateSettingsFile();
}
?>

<div class="rex-addon-output">
	<div class="rex-form">

		<h2 class="rex-hl2"><?php echo $I18N->msg('babelfish_settings'); ?></h2>

		<form action="index.php" method="post">

			<fieldset class="rex-form-col-1">
				<div class="rex-form-wrapper">
					<input type="hidden" name="page" value="<?php echo $page; ?>" />
					<input type="hidden" name="subpage" value="<?php echo $subpage; ?>" />
					<input type="hidden" name="func" value="update" />

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-text">
							<label for="settings[foo]"><?php echo $I18N->msg('babelfish_settings_foo'); ?></label>
							<input type="text" value="<?php echo $REX['ADDON']['babelfish']['settings']['foo']; ?>" name="settings[foo]" class="rex-form-text">
						</p>
					</div>

					<div class="rex-form-row rex-form-element-v1">
						<p class="rex-form-submit">
							<input type="submit" class="rex-form-submit" name="sendit" value="<?php echo $I18N->msg('babelfish_settings_save'); ?>" />
						</p>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>




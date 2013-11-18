<?php

$search = array('(CHANGELOG.md)', '(LICENSE.md)');
$replace = array('(index.php?page=dummy&subpage=help&chapter=changelog)', '(index.php?page=dummy&subpage=help&chapter=license)');

echo rex_dummy_utils::getHtmlFromMDFile('README.md', $search, $replace);


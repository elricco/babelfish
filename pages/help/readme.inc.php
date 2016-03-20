<?php

$search = array('(CHANGELOG.md)', '(LICENSE.md)');
$replace = array('(index.php?page=babelfish&subpage=help&chapter=changelog)', '(index.php?page=babelfish&subpage=help&chapter=license)');

echo babelfish_utils::getHtmlFromMDFile('README.md', $search, $replace);


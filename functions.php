<?php
require_once('functions/theme-init/plugin-update-checker.php');
$themeInit = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/mostak-shahid/update/master/review-theme.json',
	__FILE__,
	'review-theme'
);
require_once('functions/setup.php');
require_once('functions/scripts.php');
require_once('functions/custom-comments.php');
require_once('functions/widgets.php');
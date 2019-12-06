<?php

// As a precaution, only define constants once
if( ! defined('ENV_SITE_VERSION'))
{
	// Load up the site version
    $package = json_decode(@file_get_contents(CRAFT_BASE_PATH . '/package.json'), true) ?: array('version' => '0.0.0');
    define('ENV_SITE_VERSION', trim($package['version']) );
}

return [
	'environment' => CRAFT_ENVIRONMENT,
	'webpackOn' => (bool) getenv('WEBPACK_ON'),
	'version' => ENV_SITE_VERSION,
	'googleAnalyticsID' => getenv('GOOGLE_ANALYTICS_ID'),
];

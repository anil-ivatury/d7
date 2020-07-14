<?php

$conf['mail_line_endings']="\n";
$conf['drupal_http_request_fails'] = FALSE;
$base_url = 'https://developerportalv5.bancolombia.corp/int/development';
$GLOBALS['real_base_url'] = 'https://developerportalv5.bancolombia.corp/int/development';
$GLOBALS['real_base_host'] = 'https://developerportalv5.bancolombia.corp';
$GLOBALS['real_base_path'] = '/int/development';
ini_set('session.cookie_path','/int/development');
ini_set('session.cookie_secure', '1');
$cookie_domain = 'developerportalv5.bancolombia.corp';
$databases['default']['default']['init_commands'] = array('SET NAMES utf8mb4 COLLATE utf8mb4_general_ci');
header('X-Accel-Expires: 1'); // This disables Speed Booster
if (preg_match("/hybridauth/", $_SERVER['REQUEST_URI'])) {
  $conf['cache'] = 0; // This disables page caching on the fly
}

$settings['trusted_host_patterns'] = array(
	'.*');


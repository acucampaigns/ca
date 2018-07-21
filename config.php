<?php
	
define('SECURITY_KEY', '#E4w_De@%10q%_12%');

define('_DEFAULT_DOMAIN_NAME', 'canada-etavisa.info');

define('DIR_ACCESS',1);

define('ABSPATH', dirname(__FILE__) . '/');

define('__PAGES',  ABSPATH . 'pages/' );

define('__INCLUDES', ABSPATH . 'inc/' );

define('__TEMPLATE', __INCLUDES . 'template/' );

define('_404_', '/');

if(isset($_SERVER['HTTPS'])){
	
	$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";	
}else{
	
	$protocol = 'http';
}

define('__PROTOCOL', $protocol . "://");

define('__DOMAIN_NAME', isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : _DEFAULT_DOMAIN_NAME);

define('__SERVER_NAME', isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : _DEFAULT_DOMAIN_NAME);

define('__BASE_URL', __PROTOCOL . __SERVER_NAME);

define('DB_HOST', 'localhost');

define('DB_NAME', 'canadaet_new');

define('DB_USERNAME','canadaet_new');

define('DB_PASSWORD','EZ7@$S)g{rp1');

// error_reporting(-1);
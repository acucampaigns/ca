<?php
	
require_once(realpath(__DIR__ . '/..') .'/config.php');

$server_url = __BASE_URL . "/dbmanager";

// Database connection settings
$db_host = DB_HOST;
$db_name = DB_NAME;
$db_user = DB_USERNAME;
$db_pass = DB_PASSWORD;
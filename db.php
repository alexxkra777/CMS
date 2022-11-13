<?php
	define('DB_NAME', 'krayual20');
	define('DB_USER', 'krayual20');
	define('DB_PASSWORD', 'P194Ru54');
	define('DB_HOST', '127.0.0.1');

	global $db;
	$db = new PDO(
		"mysql:host=" .DB_HOST. ";dbname=" .DB_NAME,DB_USER,DB_PASSWORD,
		array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			)
		);
  ?>
<?php 

return [
	'sqlite' => [
		'driver' => 'sqlite',
		'database' => __DIR__ . '/../storage/database.sqlite',
		'prefix' => '',
	],
	'mysql' => [
		'driver' => 'mysql',
		'host' => getenv('DB_HOST'),
		'database' => getenv('DB_NAME'),
		'username' => getenv('DB_USER'),
		'password' => getenv('DB_PASS'),
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => '',
	],
	'pgsql' => [
		'driver' => 'pgsql',
		'host' => getenv('DB_HOST'),
		'database' => getenv('DB_NAME'),
		'username' => getenv('DB_USER'),
		'password' => getenv('DB_PASS'),
		'charset' => 'utf8',
		'prefix' => '',
		'schema' => 'public',
	],
	'sqlsrv' => [
		'driver' => 'sqlsrv',
		'host' => getenv('DB_HOST'),
		'database' => getenv('DB_NAME'),
		'username' => getenv('DB_USER'),
		'password' => getenv('DB_PASS'),
		'charset' => 'utf8',
		'prefix' => '',
	],
];
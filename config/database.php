<?php
	include('config.php');
	include('lib/medoo.php');

	$database = new medoo([
		'database_type' => 'mysql',
		'database_name' => $config['mysql']['database'],
		'server' => $config['mysql']['host'],
		'username' => $config['mysql']['username'],
		'password' => $config['mysql']['password'],
		'charset' => 'utf8'
	]);
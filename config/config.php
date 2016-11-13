<?php
	// General settings
	$config['site_dir'] = 'custom-ot-website'; // If you dont install this in the root of your webserver enter folder name here.
	$config['theme'] = 'default'; // What theme you wanna use located in templates folder.
	$config['server_name'] = 'Custom OT'; // Name of your server

	// Database config
	$config['mysql']['host'] = 'localhost';
	$config['mysql']['username'] = 'root';
	$config['mysql']['password'] = '';
	$config['mysql']['database'] = 'custom_tfs';


	// Do not edit this.
	$config['theme_dir'] = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $config['site_dir'] . '/templates/' . $config['theme'];
	$config['css_dir'] = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $config['site_dir'] . '/templates/' . $config['theme'] . '/css';
	$config['js_dir'] = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $config['site_dir'] . '/templates/' . $config['theme'] . '/js';
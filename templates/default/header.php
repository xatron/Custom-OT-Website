<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $config['server_name']; ?></title>
		<!-- Scripts -->
		<script src="<?php echo $config['js_dir']; ?>/jquery-3.1.1.min.js" type="text/javascript"></script>
		<script src="<?php echo $config['js_dir']; ?>/bootstrap.min.js" type="text/javascript"></script>
		
		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo $config['css_dir']; ?>/bootstrap.min.css">
	</head>

	<body>
	<?php load_partial('navbar', $config); ?>
	<div class="container">
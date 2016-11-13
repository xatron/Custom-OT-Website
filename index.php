<?php
	include('./config/config.php');
	include('./config/database.php');
	include('./functions/functions.php');
	include('./templates/' . $config['theme'] . '/header.php');

		include('./lib/page_system.php');

	include('./templates/'. $config['theme'] . '/footer.php');
?>
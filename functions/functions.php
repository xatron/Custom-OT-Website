<?php

	/**
	 * Used to check what menu item is active.
	 * Check templates/default/navbar.php for exmaple.
	 */
	function checkActive($currentpage, $page) {
		if($currentpage == $page) {
			echo 'active';
		}
	}

	/**
	 * Check so the user is logged in, if not send them to unauthorized page.
	 * TODO: Add admin permission check also.
	 */
	function securedPage() {
		if(!isset($_SESSION['sess_id'])) {
			header("Location: ?page=error/unauthorized");
			exit;
		}
	}

	/**
	 * Check if user is logged in. 
	 */
	function loggedIn() {
		if(isset($_SESSION['sess_id'])) {
			return true;
		}
	}

	/**
	 *
	 */
	function accountByID($id) {
		global $database;

		$account = $database->select('accounts', 'name', [ 'id' => $id ]);

		echo $account[0];
	}


	/**
	 * Load partials from theme folder.
	 */
	function load_partial($partial, $config) {
		try {
			if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $config['site_dir'] . '/templates/' . $config['theme'] . '/partials/' . $partial . '.php')) {
				include($_SERVER['DOCUMENT_ROOT'] . '/' . $config['site_dir'] . '/templates/' . $config['theme'] . '/partials/' . $partial . '.php');
			} else {
				throw new Exception('Could not load the partial you entered.');
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
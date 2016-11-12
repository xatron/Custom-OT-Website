<?php
	if(isset($_POST['register'])) {
		$success = false;
		$account = $_POST['account_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		// Check if account name is already taken.
		$db_select = $database->select('accounts', '*', [ 'name' => $account ]);

		if(empty($account) || empty($password) || empty($email)) {
			$error = 'You have to fill in all the fields.';
		} else if(count($db_select) == 1) {
			$error = 'Account name already taken';
		} else {
			$success = true;
		}


		if($success) {
			$database->insert('accounts', [
				'name' => $account,
				'password' => sha1($password),
				'email' => $email
			]);

			echo 'Your account has been created.';
		} else {
			echo $error;
		}
	}
?>
<h2>Register account</h2>
<form action="" method="POST">
	<label for="account_name">
		Account name
	</label>
	<input type="text" id="account_name" name="account_name">
	<br>
	<label for="password">
		Password
	</label>
	<input type="password" id="password" name="password">
	<br>
	<label for="email">
		Email
	</label>
	<input type="email" id="email" name="email">
	<br>
	<input type="submit" text="Register" name="register">
</form>
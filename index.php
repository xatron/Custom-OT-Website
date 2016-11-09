<?php
	include('./config/config.php');
	include('./config/database.php');
	include('./templates/' . $config['theme'] . '/header.php');

	if(isset($_POST['register'])) {
		$account = $_POST['account_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$database->insert('accounts', [
			'name' => $account,
			'password' => sha1($password),
			'email' => $email
		]);
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
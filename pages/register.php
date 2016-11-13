<?php
	if(isset($_POST['register'])) {
		$success = false;
		$account = trim($_POST['account_name']);
		$password = $_POST['password'];
		$email = $_POST['email'];

		// Check if account name is already taken.
		$db_select_account = $database->select('accounts', '*', [ 'name' => $account ]);
		// Check if email is already in use.
		$db_select_email = $database->select('accounts', '*', [ 'email' => $email ]);

		if(empty($account) || empty($password) || empty($email)) {
			$error = 'You have to fill in all the fields.';
		} else if(count($db_select_account) == 1) {
			$error = 'Account name already taken.';
		} else if(strlen($account) < 3) {
			$error = 'Your account name has to be 3 characters or more.';
		} else if(strlen($account) > 10) {
			$error = 'Your account name has to be less then 10 characters.';
		} else if(count($db_select_email) == 1) {
			$error = 'Emnail is already in use.';
		} else if(strlen($password) < 5) {
			$error = 'Your password has to be 5 characters or more.';
		} else if(strlen($password) > 18) {
			$error = 'Your password has to be less then 18 characters.';
		} else {
			$success = true;
		}


		if($success) {
			$database->insert('accounts', [
				'name' => $account,
				'password' => sha1($password),
				'email' => $email
			]);

			$success = 'Your account has been created.';
		}
	}
?>
<ol class="breadcrumb">
  <li><a href="./">Home</a></li>
  <li class="active">Register</li>
</ol>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Register</h3>
	</div>
	<div class="panel-body">
		<?php 
			if(isset($error)) { echo '<div class="text-danger" style="margin-bottom: 20px;">' . $error . '</div>'; } 
			if(isset($success)) { echo '<div class="text-success" style="margin-bottom: 20px;">' . $success . '</div>'; }
		?>
	    <form action="" method="POST">
		    <div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Account Name</span>
				<input type="text" name="account_name" class="form-control" placeholder="Account name" aria-describedby="basic-addon1">
			</div>

			<div class="input-group" style="margin-top: 20px;">
				<span class="input-group-addon" id="basic-addon1">Password</span>
				<input type="password" name="password" class="form-control" placeholder="*********" aria-describedby="basic-addon1">
			</div>

			<div class="input-group" style="margin-top: 20px;">
				<span class="input-group-addon" id="basic-addon1">Email</span>
				<input type="text" name="email" class="form-control" placeholder="example@example.com" aria-describedby="basic-addon1">
			</div>
			<br>
			<input type="submit" value="Register" name="register" class="btn btn-default">
		</form>
	</div>
</div>
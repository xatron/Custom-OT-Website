<?php
	if(isset($_POST['login'])) {
		$account = trim($_POST['account']);
		$password = sha1($_POST['password']);

		$sql_select_account = $database->select('accounts', '*', [ 'AND' => [ 'name' => $account, 'password' => $password ] ]);

		if(count($sql_select_account) == 1) {
			$_SESSION['sess_name'] = $sql_select_account[0]['name'];
			$_SESSION['sess_id'] = $sql_select_account[0]['id'];

			header('Location: ?page=account');
			exit;
		}
	}
?>
<ol class="breadcrumb">
  <li><a href="./">Home</a></li>
  <li class="active">Login</li>
</ol>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Login</h3>
	</div>
	<div class="panel-body">
	    <form action="" method="POST">
		    <div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Account Name</span>
				<input type="text" name="account" class="form-control" placeholder="Account name" aria-describedby="basic-addon1">
			</div>

			<div class="input-group" style="margin-top: 20px;">
				<span class="input-group-addon" id="basic-addon1">Password</span>
				<input type="password" name="password" class="form-control" placeholder="*********" aria-describedby="basic-addon1">
			</div>
			<br>
			<input type="submit" value="Login" name="login" class="btn btn-default">
		</form>
	</div>
</div>

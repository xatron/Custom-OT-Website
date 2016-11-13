<?php if(!loggedIn()) { ?>
	<nav class="navbar navbar-default">
		<div class="container">
		<div class="container-fluid">
			<div class="navbar-header">
		    	<a class="navbar-brand" href="./"></a>
			</div>
			<ul class="nav navbar-nav">
				<li class="<?php if(!isset($_GET['page'])) { $page = 'home'; } checkActive($page, 'home'); ?>"><a href="./">Home</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="<?php checkActive($_GET['page'], 'login'); ?>"><a href="?page=login">Login</a></li>
				<li class="<?php checkActive($_GET['page'], 'register'); ?>"><a href="?page=register">Register</a></li>
		    </ul>
		</div>
		</div>
	</nav>
<?php } else { ?>
	<nav class="navbar navbar-default">
		<div class="container">
		<div class="container-fluid">
			<div class="navbar-header">
		    	<a class="navbar-brand" href="./"></a>
			</div>
			<ul class="nav navbar-nav">
				<li class="<?php if(!isset($_GET['page'])) { $page = 'home'; } checkActive($page, 'home'); ?>"><a href="./">Home</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="<?php checkActive($_GET['page'], 'account'); ?>"><a href="?page=account"><?php accountByID($_SESSION['sess_id']); ?></a></li>
				<li><a href="?page=logout">Log out</a></li>
		    </ul>
		</div>
		</div>
	</nav>
<?php }?>
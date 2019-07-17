<?php
	// var_dump($_POST);

	require_once('scripts/config.php');
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$ip = $_SERVER['REMOTE_ADDR'];

		$message = login($username, $password,$ip);
	}
	else{
		if(isset($_POST['username']) || isset($_POST['password'])){
			$message = 'Please fill the required fields';
		}
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
</head>
<body>
	<h1 class="row text-center">Log In</h1>
	<?php if(!empty($message)): ?>
	<p><?php echo $message; ?></p>
	<?php endif;?>
	<form  class="small-6 row" action="admin_login.php" method="post">
		<label class="columns">Username</label>
			<input class="small-12 columns" type="text" name="username" value="">
		
		<label class="columns">Password</label>
			<input class="small-12 columns" type="password" name="password">
		
		<button class="small-12 columns button" type="submit">Login</button>
	</form>
</body>
</html>
<?php
	require_once('scripts/config.php');
	confirm_logged_in();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">

	<title>Welcome to admin Panel</title>
</head>
<body>
	<section class="row">
	<h3 class="columns small-4">Welcome <?php echo $_SESSION['user_name'];?></h3>
	<nav>
		<ul class="menu columns small-8 expended">
			<li><a href="index.php">Home</a></li>
			<li><a href="admin_addproduct.php">Add Product</a></li>
			<li><a href="admin_editallproducts.php">Edit Product</a></li>
			<li><a href="admin_deleteproduct.php">Delete Product</a></li>
			<li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
			
		</ul>
	</nav>
	</section>


	<h2 class="columns small-8">Admin Dashboard</h2>
	
	

	
</body>
</html>
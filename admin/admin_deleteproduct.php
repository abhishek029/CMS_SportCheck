<?php
	require_once('scripts/config.php');
	confirm_logged_in();

	$allproduct = getAll("tbl_product");
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Delete product</title>
	<meta name="viewport"	 content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
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

	<h2>Destroy Record</h2>
		<table class='row text-center'>
			<tr class='col'>
				<th>Id</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Delete</th>
			</tr>
			<?php while($found_product = $allproduct->fetch(PDO::FETCH_ASSOC)):?>			
				<tr>
					<td><?php echo $found_product['product_id']?></td>
					<td><?php echo $found_product['product_title']?></td>				
					<td><?php echo $found_product['product_price']?></td>
					<td>
						<a href="scripts/caller.php?caller_id=delete&id=<?php echo $found_product['product_id']?>">Delete</a>
					</td>
				</tr>
		<?php endwhile;?>

	</table>

</body>
</html>
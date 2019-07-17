<?php
	require_once('scripts/config.php');
    confirm_logged_in();
    
    if(isset($_POST['submit'])){
        $cover = $_FILES['cover'];
        $product_title = trim($_POST['product_title']);
        $product_desc = trim($_POST['product_desc']);
        $product_price = trim($_POST['product_price']);

        // validation
        if(empty($product_title)){
            $message = 'Please fill required fields';
        }else{

            $result = addProduct($product_title,$product_desc,$product_price,$cover);

            $message = $result;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
    <script src="main.js"></script>
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

    
    <?php if(!empty($message)): ?>
	<p><?php echo $message; ?></p>
	<?php endif;?>

    <h2 class="row text-center">Add Product</h2>

    <form class="row small-4" action="admin_addproduct.php" method="post" enctype="multipart/form-data">
        <label class="columns" for="cover">Cover Image:</label>
		<input class="columns" type="file" name="cover" id="cover" value="">

        <label class="columns" for="product_title">Product Title:</label>
        <input class="columns" type="text" id="product_title" name="product_title" value="">

        <label class="columns" for="product_desc">Description:</label>
        <textarea class="columns" id="product_desc" placeholder="write here..." name="product_desc"></textarea>

        <label class="columns" for="product_price">Price:</label>
        <input class="columns" type="text" id="product_price" name="product_price" value="">

        <button class="columns button" type="submit" name="submit">Create Product</button>
    </form>
</body>
</html>
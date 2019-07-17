<?php
	require_once('scripts/config.php');

	include('scripts/connect.php');
	confirm_logged_in();

	$id = $_SESSION	['product_id'];
	$tbl = 'tbl_product';
	$col = 'product_id';

	$get_product_set = getSingle($tbl,$col,$id);


	if(is_string($get_product_set)){
		$message = "Failed";
	}

	if(isset($_POST['submit'])){
		$cover = $_FILES['cover'];
		$product_title = trim($_POST['product_title']);
        $product_desc = trim($_POST['product_desc']);
        $product_price = trim($_POST['product_price']);
		// validation
		// set it default to zero to run the image moving code
		$_SESSION['moveImage'] = 0;
		if(empty($cover['name'])){
			$cover['name']=$_SESSION['imageName'];
			// used this variable to not run the image moving code
			$_SESSION['moveImage'] = 1;
			// exit;
		}
        if(empty($product_title) || empty($product_price)){
            $message = 'Please fill required fields';

        }else{
            $result = editProduct($id,$product_title,$product_desc,$product_price,$cover);
            $message = $result;
        }
    }
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit product</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
</head>
<body>



	<h2 class="row text-center">Edit product</h2>
	<?php if(!empty($message)):?>
	<p class="columns"><?php echo $message;?></p>
<?php endif ?>

<?php if($found_product = $get_product_set->fetch(PDO::FETCH_ASSOC)):
	$_SESSION['imageName'] = $found_product['product_avatar'];
	?>
	
<form class="row" action="admin_editproduct.php" method="post" enctype="multipart/form-data">
     
	 <div class="columns small-4">
	    <label class="columns" for="cover">Current Image:</label>
		<img src="../images/<?php echo($found_product['product_avatar']); ?>" name="cover" alt="image"> 
		<input class="columns" type="file" name="cover" id="cover" value="">
	</div>	

	<div class="columns small-8">
        <label class="columns" for="product_title">Product Title:</label>
        <input class="columns" type="text" id="product_title" name="product_title" value="<?php echo($found_product['product_title']); ?>">

        <label class="columns" for="product_desc">Description:</label>
        <textarea class="columns" id="product_desc" placeholder="write here..." name="product_desc"><?php echo($found_product['product_desc']); ?></textarea>

        <label class="columns" for="product_price">Price:</label>
        <input class="columns" type="text" id="product_price" name="product_price" value="<?php echo($found_product['product_price']); ?>">

        <button class="columns button" type="submit" name="submit">Update Product</button>
	</div>
    </form>
<?php endif;?>

</body>
</html>
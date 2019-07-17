<?php require_once('admin/scripts/config.php'); 
if(isset($_GET['id'])){
	$tbl = 'tbl_product';
	$col = 'product_id';
	$id = $_GET['id'];
	$results = getSingle($tbl,$col,$id);
}else{
	echo 'Missing Product Id';
	exit;
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Movie Details</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
</head>
<body>
	<?php
	include("header.php");

		while($row = $results -> fetch(PDO::FETCH_ASSOC)):?>

		<div class="row">
			<h2 class="columns small-12"><?php echo $row['product_title']; ?></h2>			
			<img class="columns small-4" src="images/<?php echo $row['product_avatar']; ?>">
			<p class="columns small-8"> <?php echo $row['product_desc']; ?></p>
			<p class="columns small-8"> <b>Price:</b> <?php echo $row['product_price']; ?></p>

		</div>		

		<?php endwhile;

	include("footer.php");
	?>
	

</body>
</html>
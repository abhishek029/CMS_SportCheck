<?php require_once('admin/scripts/config.php'); 
if(isset($_GET['filter'])){
	$tbl = 'tbl_product';
	$tbl_1 = 'tbl_genre';
	$tbl_3 = 'tbl_product_genre';
	$col = 'product_id';
	$col_2 = 'genre_id';
	$col_3 = 'genre_name';
	$filter = $_GET['filter'];
	$results = filterResults($tbl,$tbl_1,$tbl_3,$col,$col_2,$col_3,$filter);
}else{
	$results = getAll('tbl_product');
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>SportCheck</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
</head>
<body>
	<?php include("header.php");?>

	<div class="row">
		<?php while($row = $results -> fetch(PDO::FETCH_ASSOC)):?>

			<div class="columns small-12 medium-12">	
				<h3 class="columns small-12"><?php echo $row['product_title']; ?></h3>	
				<img class="columns small-4" src="images/<?php echo $row['product_avatar']; ?>">
				<p class="columns small-8"> <?php echo $row['product_desc']; ?></p>
				<p class="columns small-8"> <b>Price:</b> <?php echo $row['product_price']; ?></p>
				<a class="columns small-8" href="details.php?id=<?php echo $row['product_id']?>"><b>See Details</b></a>
			</div>
				

		<?php endwhile;?>
	</div>
	
	<?php include("footer.php");?>

</body>
</html>
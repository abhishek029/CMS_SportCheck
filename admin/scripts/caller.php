<?php
	require_once('config.php');
confirm_logged_in();
	if(isset($_GET['caller_id'])){
		$action = $_GET['caller_id'];

		switch($action){
			case 'logout':
				logged_out();
				break;

			case 'delete':
				$id = $_GET['id'];
				deleteProduct($id);
				break;

			case 'update':
				$id = $_GET['id'];				
				$_SESSION['product_id']=$_GET['id'];			
				redirect_to('../admin_editproduct.php?product_id='.$id);
		}
	}
?>
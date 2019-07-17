<?php
	function redirect_to($location){
		if($location != NULL){
			header('Location: '.$location);
			exit;
		}
	}
	
	function updateCounter($username){

		include('connect.php');
		// code for storing a flag variable which will not go more than 3
		$update_flag_query = 'select flag from tbl_user WHERE user_name = :username';
		$update_flag_set = $pdo->prepare($update_flag_query);
		$update_flag_set->execute(
			array(
				':username'=>$username
			)
		);
		
		while($found_user = $update_flag_set->fetch(PDO::FETCH_ASSOC)){
			// assigned flag value to variable
			$flag = $found_user['flag'];
		}

		
		// query for updating flag variable by one number
		$update_flag_query = 'UPDATE tbl_user SET flag =:flag WHERE user_name = :username';
		$update_flag_set = $pdo->prepare($update_flag_query);
		$update_flag_set->execute(
			array(
				':username'=>$username,
				':flag'=>$flag+1
			)
		);
		// check weather you have failed for more than 3 times or not
		if($flag>=3){
			// echo 'Failed your all attempts';
			$update_pass_query = 'UPDATE tbl_user SET user_pass = :pass WHERE user_name = :username';
			$update_pass_set = $pdo->prepare($update_pass_query);
			$update_pass_set->execute(
			array(
				':username'=>$username,
				':pass'=>'admin'
			)
		);
			return 'Failed your all attempts contact admin to reset your password';
		}else{
			return 'Password Incorrect';
		}
	}
?>
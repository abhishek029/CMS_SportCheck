<?php
	
	function login($username, $password,$ip){
		require_once('connect.php');

		$check_exist_query = 'select * from tbl_user where user_name=:user_name';
		
		$user_set = $pdo->prepare($check_exist_query);
		
		$user_set->execute(
			array(
				':user_name' => $username 
			)
		);
		
		if($user_set->fetchColumn()>0){
			$get_user_query = 'SELECT * from tbl_user where user_name = :username and user_pass = :password';
			$get_user_set = $pdo->prepare($get_user_query);
			$get_user_set->execute(
				array(
					':username'=>$username,
					':password'=>$password
				)
			);

			while($found_user = $get_user_set->fetch(PDO::FETCH_ASSOC)){

				$id = $found_user['user_id'];
				$_SESSION['user_id'] = $id;
				$_SESSION['user_name'] = $found_user['user_fname'];
				$_SESSION['confirmed'] = $found_user['confirmed'];
							
			}

			if(empty($id)){
				// calling a function which will increase a flag variable in functions file
				$message = updateCounter($username);
				// $message = 'Password Incorrect';
				return $message;
			}
			$update_flag_query = 'UPDATE tbl_user SET flag = :flag WHERE user_name = :username';
			$update_flag_set = $pdo->prepare($update_flag_query);
			$update_flag_set->execute(
			array(
				':username'=>$username,
				':flag'=>'0'
			)
		);

			redirect_to('index.php');

		}else{
			$message = "User Not Found";
			return $message;
		}

	}

?>
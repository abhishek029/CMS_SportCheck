<?php
    function addProduct($product_title,$product_desc,$product_price,$cover){
        include('connect.php');
        require_once('functions.php');

        $file_type = pathinfo($cover['name'],PATHINFO_EXTENSION);
        $accepted_types = array('gif', 'jpg', 'jpe', 'jpeg', 'png','svg');
        if(!in_array($file_type,$accepted_types)){
            throw new Exception("Wrong file type!");				
        }

        $target_path = '../images/' . $cover['name'];
        if(!move_uploaded_file($cover['tmp_name'], $target_path)){
            throw new Exception("Failed to move uploaded file, check permissions!");				
        }

        // $th_copy = '../images/TH_' . $cover['name'];

        // if(!copy($target_path, $th_copy)){
        //     throw new Exception("copy failed");				
        // }

        $create_product_query = 'INSERT INTO tbl_product(product_title, product_desc,product_price,product_avatar) VALUES(:product_title,:product_desc,:product_price,:cover)';

        $create_product_set = $pdo->prepare($create_product_query);
        $create_product_set->execute(
            array(
                ':product_title'=>$product_title,
                ':product_desc'=>$product_desc,
                ':product_price'=>$product_price,
                ':cover'=>$cover['name']
            )
        );
        if(!$create_product_set){
            throw new Exception("Failed to insert product");	        	
        }

        if($create_product_set->rowCount()){
            redirect_to('index.php');
        }else{
            $message = 'Your hiring practices failed';
            return $message;
        }
    }

    function editProduct($id,$product_title,$product_desc,$product_price,$cover){
        include('connect.php');
        
        $file_type = pathinfo($cover['name'],PATHINFO_EXTENSION);
        $accepted_types = array('gif', 'jpg', 'jpe', 'jpeg', 'png');
        if(!in_array($file_type,$accepted_types)){
            throw new Exception("Wrong file type!");				
        }
        // check this condition if its 1 it will not try to move files
        if($_SESSION['moveImage'] == 0){
            $target_path = '../images/' . $cover['name'];
            if(!move_uploaded_file($cover['tmp_name'], $target_path)){
                throw new Exception("Failed to move uploaded file, check permissions!");				
            }
        }
        $create_user_query = 'UPDATE tbl_product set product_title=:product_title, product_desc=:product_desc, product_price=:product_price, product_avatar=:cover WHERE product_id=:id';

        $create_user_set = $pdo->prepare($create_user_query);
        $create_user_set->execute(
            array(
                ':product_title'=>$product_title,
                ':product_desc'=>$product_desc,
                ':product_price'=>$product_price,
                ':cover'=>$cover['name'],
                ':id'=>$id
            )
        );

            redirect_to('index.php');
       
    }

    function deleteProduct($id){
        include('connect.php');

        $queryAll='delete from tbl_product where product_id = :id';

        $runFilter = $pdo ->prepare($queryAll);

        $runFilter->execute(
            array(
                ':id'=>$id 
            )
        );

        if($runFilter){
            redirect_to('../index.php');
        }else{
            $error = 'There is problem in Filter';
            return $error;
        }
    }
?>
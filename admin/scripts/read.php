<?php
	function getAll($tbl){
		include('connect.php');

		$queryAll='select * from '.$tbl;

		$runAll = $pdo -> query($queryAll);

		if($runAll){
			return $runAll;
		}else{
			$error = 'There was a problem accessing this information';
			return $error;
		}

	}

	function filterResults($tbl,$tbl_2,$tbl_3,$col,$col_2,$col_3,$filter){
		include('connect.php');

		$queryFilter = 'SELECT * FROM '.$tbl.' a,';
		$queryFilter .= ' '.$tbl_2.' b,';
		$queryFilter .= ' '.$tbl_3.' c';
		$queryFilter .= ' WHERE a.'.$col.' = c.'.$col;
		$queryFilter .= ' AND b.'.$col_2.' = c.'.$col_2;
		$queryFilter .= ' AND b.'.$col_3.' = :filter';

		// echo $queryFilter;exit;
		$runFilter = $pdo ->prepare($queryFilter);

		$runFilter->execute(
			array(
				':filter'=>$filter 
			)
		);

		if($runFilter){
			return $runFilter;
		}else{
			$error = 'There is problem in Filter';
			return $error;
		}
	}

	function getSingle($tbl,$col,$id){
		include('connect.php');

		$queryAll='select * from '.$tbl.' WHERE '.$col.' = '.$id;

		$runAll = $pdo -> query($queryAll);

		if($runAll){
			return $runAll;
		}else{
			$error = 'There was a problem accessing this information';
			return $error;
		}
	}


	
?>

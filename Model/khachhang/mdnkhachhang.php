<?php

	include_once("Model/chung/ketnoi.php");

	class mkhachhang{
		function select_khachhang(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM khachhang  WHERE username = '".$_SESSION['matk']."' ";
				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
	}


?>
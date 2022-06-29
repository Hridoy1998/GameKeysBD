<?php 

	function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'admin';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con; 
	}

	function show_notices(){		
		$con = getConnection();
		if($con){
			return true;
		}else{
			return false;
		}
	}



	
	


?>
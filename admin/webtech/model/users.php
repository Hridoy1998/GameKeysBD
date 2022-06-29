<?php 

	function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'admin';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con; 
	}

	function add_buyer($first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$des){		
		$con = getConnection();
        $conn = getConnection();
        $check="SELECT * FROM user where username='{$username}' and type='Buyer'";
        $result = mysqli_query($conn, $check);
        if($result !== false && $result->num_rows > 0)
        {
            echo"error, the username already taken....";
        }
        else{
			$check="SELECT * FROM user where email='{$email}' and type='Buyer'";
			$result = mysqli_query($conn, $check);
			if($result !== false && $result->num_rows > 0)
			{
				echo"error, email  already taken....";
			}
			else{
				$sql = "INSERT INTO user VALUES  ('','{$first_name}','{$last_name}', '{$username}','{$dob}','{$gender}','{$email}','{$phonenumber}','{$password}','Buyer','{$des}')";
				if(mysqli_query($con, $sql)){
					return true;
				}else{
					return false;
				}

			}
		
      }
	}
    function add_seller($first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$des){		
		$con = getConnection();
        $conn = getConnection();
        $check="SELECT * FROM user where username='{$username}' and type='Seller'";
        $result = mysqli_query($conn, $check);
        if($result !== false && $result->num_rows > 0)
        {
            echo"error, the username already taken....";
        }
        else{
			$check="SELECT * FROM user where email='{$email}' and type='Seller'";
			$result = mysqli_query($conn, $check);
			if($result !== false && $result->num_rows > 0)
			{
				echo"error, email  already taken....";
			}
			else{
				$sql = "INSERT INTO user VALUES  ('','{$first_name}','{$last_name}', '{$username}','{$dob}','{$gender}','{$email}','{$phonenumber}','{$password}','Seller','{$des}')";
				if(mysqli_query($con, $sql)){
					return true;
				}else{
					return false;
				}

			}
		
      }
	}

	function show(){		
		$con = getConnection();
		if($con){
			return true;
		}else{
			return false;
		}
	}

?>
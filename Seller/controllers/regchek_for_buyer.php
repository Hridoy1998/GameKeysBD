<?php 
session_start();
require('../model/users.php');
if(isset($_REQUEST['submitNewAccountBuyer'])){
	
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $username = $_REQUEST['username'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $email = $_REQUEST['email'];
    $phonenumber = $_REQUEST['phonenumber'];
	$password = $_REQUEST['password'];

	$src = $_FILES['profilepic']['tmp_name'];
		$des = '../img/'.$_FILES['profilepic']['name'];
		move_uploaded_file($src, $des);


	if($first_name != null &&$last_name != null &&$username != null &&$dob != null &&$gender != null &&$email != null && $phonenumber != null && $password != null){
		
			$con = getConnection();
		    $sql = "select * from block_list where email='{$email}' or phone_number='{$phonenumber}'";
            $result=mysqli_query($con, $sql);
            $row= mysqli_fetch_assoc($result);
            if($result !== false && $result->num_rows > 0)
            {
                echo("This Account has block....");

            }
			else{
		 	$status = add_buyer($first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$des);
			if($status)
			{
				header('location: ../views/login.php');
			}
			else
			{
				echo"Samething error......!!!";
			}
		}

	}else{
		echo "null submission ....";
	}
}

?>
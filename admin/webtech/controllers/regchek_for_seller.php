<?php 
session_start();
require('../model/users.php');

if(isset($_POST['submitNewseller'])){
	
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];

	$src = $_FILES['profilepic']['tmp_name'];
		$des = '../img/'.$_FILES['profilepic']['name'];
		move_uploaded_file($src, $des);


	if($first_name != null &&$last_name != null &&$username != null &&$dob != null &&$gender != null &&$email != null && $phonenumber != null && $password != null){
		
			$con = getConnection();
		    $sql ="select * from block_list where email='{$email}' or phone_number='{$phonenumber}'";
            $result=mysqli_query($con, $sql);
            $row= mysqli_fetch_assoc($result);
            if($result !== false && $result->num_rows > 0)
            {
				$msg="This Account has block....";
                echo($msg);

            }
			else{
		 	$status = add_seller($first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$des);
			if($status)
			{
				echo('Seller Account create successfully.');
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
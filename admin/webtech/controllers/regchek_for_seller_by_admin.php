<?php 
session_start();
require('../model/users.php');

if(isset($_POST['submitNewAccountSeller'])){

	$data = $_POST['data'];
	$data = json_decode($data);

	$first_name = $data->first_name;
	$last_name = $data->last_name;
	$username = $data->username;
	$dob = $data->dob;
	$gender = $data->gender;
	$email = $data->email;
	$phonenumber = $data->phonenumber;
	$password = $data->password;
	//$profilepic = $data->profilepic;
		$des = '../img/user_icon_001.jpg';

	if($first_name != null &&$last_name != null &&$username != null &&$dob != null &&$gender != null &&$email != null && $phonenumber != null && $password != null){
		

		$con = getConnection();
		$sql = "select * from block_list where email='{$email}' or phone_number='{$phonenumber}'and type='Seller'";
		$result=mysqli_query($con, $sql);
		$row= mysqli_fetch_assoc($result);
		if($result !== false && $result->num_rows > 0)
		{
			echo("This Account has block....");

		}
		
		else{
			$con = getConnection();
			$sql = "select * from user where type='Seller' and email='{$email}'";
			$result=mysqli_query($con, $sql);
			$row= mysqli_fetch_assoc($result);

			if($result !== false && $result->num_rows > 0)
			{
				echo("Email already taken..");

			}
			else{
				$con = getConnection();
				$sql = "select * from user where username='{$username}'";
				$result=mysqli_query($con, $sql);
				$row= mysqli_fetch_assoc($result);
				if($result !== false && $result->num_rows > 0)
				{
					echo("username already taken..");

				}

				else{
					$status = add_seller($first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$des);
					if($status)
					{
						echo"Seller Add successfull......";
					}
					else
					{
						echo("Samething error......!!!");
					}
				}
			}
	}

	}else{
		echo('null submission......');
	}


}	

?>
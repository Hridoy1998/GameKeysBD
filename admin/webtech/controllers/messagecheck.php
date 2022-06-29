<?php 
require('../controllers/header.php');
require('../model/admin.php');
if(isset($_POST['sendm'])){

		$receiver = $_POST['receiver'];
		$sender = $_POST['sender'];
        $message = $_POST['message'];
        $current_date = date("Y-m-d H:i:s");


		if($message != null ){

		$status = Add_message($receiver, $sender,$message,$current_date);
		
		if($status)
		{
			echo"Message send";
		}
		else
		{
			echo("Something wrong... please try agin....!");
		}	

		}
		else{
			echo("Empty Message field");
		}		
	}
else
{
	echo"something empty ....";
}

?>
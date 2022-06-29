<?php 
require('../controllers/header.php');
require('../model/usersmodel.php');
if(isset($_REQUEST['postbtn'])){
	if(isset($_REQUEST['gamename'])&& isset($_REQUEST['gamedetails']))
	{
		$date = $_REQUEST['postdate'];
		$name = $_REQUEST['gamename'];
        $details = $_REQUEST['gamedetails'];
		$buyer_name = $_SESSION['buyer_name'];


		if($date != null && $name!=null && $details!=null ){

		$status = Add_buyerpost($date, $name, $details,$buyer_name);
		
		if($status)
		{
			header('location: ../views/buyer_dashboard.php');
		}
		else
		{
			echo("Something wrong... please try agin....!");
		}	

		}
		else{
			header("Location: ../views/Post_game.php?error2=null submission ....");
		}		
	}
    
}
else
{
	echo"something empty ....";
}

?>
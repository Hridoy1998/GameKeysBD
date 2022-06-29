<?php 
require('../controllers/header.php');
require('../model/usersmodel.php');
if(isset($_POST['postbtn'])){
	$data = $_POST['data'];

	$data = json_decode($data);
    
	$date =$data->postdate;
	$name =$data->gamename;
	$details =$data->gamedetails;
	
	
	{
		
		$buyer_name = $_SESSION['buyer_name'];


		if($date != null && $name!=null && $details!=null ){

		$status = Add_buyerpost($date, $name, $details,$buyer_name);
		
		if($status)
		{
			echo "Successfully Posted";
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


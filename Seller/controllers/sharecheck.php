<?php 
require('../controllers/header.php');
require('../model/usersmodel.php');
if(isset($_REQUEST['upbtn'])){
	if(isset($_REQUEST['gamename']))
	{
		$date = $_REQUEST['postdate'];
		$name = $_REQUEST['gamename'];
    
		$buyer_name = $_SESSION['buyer_name'];
         
        $src = $_FILES['pic']['tmp_name'];
		$des = '../img/'.$_FILES['pic']['name'];
		move_uploaded_file($src, $des);
        


		if($date != null && $name!=null ){

		$status = share_photo($date, $name, $des,$buyer_name);
		
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
			header("Location: ../views/share_photos.php?error2=null submission ....");
		}		
	}
    
}
else
{
	echo"something empty ....";
}

?>
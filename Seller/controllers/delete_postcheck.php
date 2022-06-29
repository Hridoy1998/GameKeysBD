<?php 
require('../controllers/header.php');
require('../model/admin.php');

if(isset($_REQUEST['deletebtn'])){
		$id = $_REQUEST['id'];


		if($id!=null){
			$status = D_buyerpost($id);
			if($status)
		{
			header('location: ../views/viewposts.php');
		}
		else
		{
			echo("Something wrong... please try agin....!");
		}

		}else{
			echo "null submission ....";
		}
    
}
else
{
	echo"something empty ....";
}

?>
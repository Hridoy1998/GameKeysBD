<?php 
require('../controllers/header.php');
require('../model/usersmodel.php');

if(isset($_POST['delete'])){
		$id = $_POST['id'];

		if($id!=null){
			$status = D_buyerpost($id);
			if($status)
		{
			echo 'Post deleted';
		}
		else
		{
			echo("Something wrong... please try agin....!");
		}

		}
    
}
else
{
	echo"something empty ....";
}

?>
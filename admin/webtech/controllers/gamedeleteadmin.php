<?php 
require('../controllers/header.php');
require('../model/admin.php');

if(isset($_POST['DELETEb'])){
		$id = $_POST['id'];


		if($id!=null){
			$status = D_game($id);
			if($status)
		{
			echo'Game Delete successfully.';
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
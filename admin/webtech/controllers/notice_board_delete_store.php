<?php 
require('../controllers/header.php');
require('../model/admin.php');

if(isset($_POST['noticebtn'])){
		$id = $_POST['id'];


		if($id!=null){
			$status = D_notices($id);
			if($status)
		{
			echo'Notice Delete successfully.';
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
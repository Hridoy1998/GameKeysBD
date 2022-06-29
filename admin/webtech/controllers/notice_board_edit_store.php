<?php 
require('../controllers/header.php');
require('../model/admin.php');

if(isset($_POST['noticebtn'])){
	if(isset($_POST['notice_bar']))
	{
		$id = $_POST['id'];
		$date = $_POST['notice_date'];
		$notice = $_POST['notice_bar'];


		if($id!=null && $date != null && $notice!=null ){
			$status = update_notices($id,$date, $notice);
			if($status)
		{
			echo"notice update successfully";
		}
		else
		{
			echo("Something wrong... please try agin....!");
		}

		}else{
			echo "null submission ....";
		}		
	}
    
}
else
{
	echo"something empty ....";
}

?>
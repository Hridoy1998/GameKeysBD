<?php 
require('../controllers/header.php');
require('../model/admin.php');
if(isset($_POST['noticebtn'])){

		$date = $_POST['notice_date'];
		$notice = $_POST['notice_bar'];


		if($date != null && $notice!=null ){

		$status = Add_notices($date, $notice);
		
		if($status)
		{
			echo"Notice Add successfully. Notice posted";
		}
		else
		{
			echo("Something wrong... please try agin....!");
		}	

		}
		else{
			echo("null submission ....");
		}		
	}
else
{
	echo"something empty ....";
}

?>
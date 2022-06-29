<?php 
require('../controllers/header.php');
require('../model/users.php');
if(isset($_POST['role']))
{
    if($_POST['role'] == 'buyer'&&$_POST['btn'])
    {
		if(isset($_POST['search'])){
		
			$username = $_POST['search'];
		
			if($username != null){
					$_SESSION['search']=$username;
					header('location: ../views/searchinfo buyer.php');
				}
				else
				{
					echo("null submission ....");
				}
				
		
			}else{
				echo("null submission ....");
			}
		}


	elseif($_POST['role'] == 'seller'&&$_POST['btn'])
    	{
		if(isset($_POST['search'])){
		
			$username = $_POST['search'];
		
			if($username != null){
				
				$_SESSION['search']=$username;
					header('location: ../views/searchinfo seller.php');
				
				}
				else
				{
					echo("null submission ....");
				}
				
		
			}else{
				echo("null submission ....");
			}
		}



	elseif($_POST['role'] == 'game'&&$_POST['btn'])
   		 {
		if(isset($_POST['search'])){
		
			$username = $_POST['search'];
		
			if($username != null){

				$_SESSION['search']=$username;
					header('location: ../views/searchinfo game.php');
				
				}
				else{
					echo("null submission ....");
				}
		
			}else{
				echo("null submission ....");
			}
		}


	else{
		echo("chose role");
        }

}

else
{
	echo("chose role");
}
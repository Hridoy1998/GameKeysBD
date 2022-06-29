<?php 
require('../controllers/header.php');
require('../model/usersmodel.php');

    if(isset($_POST['btn']))
   		 {
		if(isset($_POST['search'])){
		
			$gamename = $_POST['search'];
		
			if($gamename != null){

				$_SESSION['search']=$gamename;
					header('location: ../views/searchinfo_game.php');
				
				}
				else{
					echo("null submission ....");
				}
		
			}else{
				echo("null submission ....");
			}
		}




<?php
require('../controllers/header.php');
require('../model/admin.php');

	if(isset($_POST['up'])){
		//print_r($_FILES['myfile']);
		$src = $_FILES['profilepic']['tmp_name'];
		$des = '../img/'.$_FILES['profilepic']['name'];
		
		if(move_uploaded_file($src, $des)){
			$status = pic_up_admin($des);
			if($status)
			{
				header('location: ../views/admin profile.php');
			}
			else
			{
				echo"Samething error......!!!";
			}
		}else{
			header('location: ../views/admin profile.php?error=there is no photo for upload');
			
			echo "error";
		}
	}

?>
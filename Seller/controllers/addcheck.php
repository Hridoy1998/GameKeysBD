<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$name = $_REQUEST['name'];
	$price = $_REQUEST['price'];
	

	if($name != null && $price != null){
		
		//$user = ['name'=> $name, 'price'=>$rice, 'email'=>$email];
		//$_SESSION['user'] = $user;

		$user = $name."|".$price;
		$file = fopen('newgames.txt', 'w');
		fwrite($file, $user);
		         
        echo"Adding new game successful";
                
		
	}else{
		echo "null submission ....";
	}
}

?>
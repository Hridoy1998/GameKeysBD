<?php 
	session_start();
	if(isset($_COOKIE['status'])){
	$id= $_GET['id'];

	$file = fopen('../model/sellerinfo.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode("|", $user);

		if(trim($userArray[0]) == $id){
			$editUser = $userArray;
			break;
		}
	}

?>

<html>
<head>
	<title>Contact Seller</title>
</head>
<body>
<h2>Buyer Dashboard</h2>
<section align="left">
                       <ul>
                       <li><a href="../views/buyer_dashboard.php"> Dashboard </a></li><br>
                       
                       </ul>    
                    </section>
<hr><br>
<table border="1">
		<tr>
			<td>
	
	<form method="POST" action="">
		
			<legend>CONTACT SELLER</legend>
		
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" value="<?=$editUser[2]?>">
				</td>
			</tr>
	
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email" value="<?=$editUser[5]?>">
				</td>
			</tr>
			<tr>
			<tr>
				<td>Send Message</td>
				<td>
					<textarea name="" id="" cols="30" rows="10"></textarea>
				</td>
			</tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Send">
				</td>
			</tr>
		</table>
		
	</form>
	</td>
		</tr>
		</table>
</body>
</html>


<?php 
	}else{
		echo "invalid request...";
	} 
?>
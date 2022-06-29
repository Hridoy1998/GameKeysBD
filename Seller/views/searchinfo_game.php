<?php
require('../controllers/header.php');
require('../model/users.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>game information</title>
	<link rel="stylesheet" href="../css/myprofile.css">
</head>

<body>
<div class="container">

	<table border="1" >
		<tr>
			<td >GAME NAME</td>
			<td >PRICE</td>
            <td >PLATFROM</td>
            <td >REGION</td>
            <td >GAME TYPE</td>
            <td >DEVICE</td>
			<td >SELLER NAME</td>
			<td >IMAGE</td>
			
		</tr>

		<?php 
			$value=$_SESSION['search'];
			$con = getConnection();
			$sql = "SELECT * from product where game_name ='{$value}'";
			$result = $con->query($sql);
			if($result !== false && $result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["game_name"]?></td>
			<td ><?=$row["price"]?></td>
            <td ><?=$row["platfrom"]?></td>
            <td ><?=$row["region"]?></td>
            <td><?=$row["gametype"]?></td>
            <td ><?=$row["device"]?></td>
			<td ><?=$row["seller_name"]?></td>
			<td><img src="<?=$row["img"]?>" height="80" width="80"></td>
			<td><a href="../views/checkout.php?checkout=<?= $row["id"] ?>">Checkout</a></td>

		</tr>

		<?php 
			}
		}
		else
		{
			
			echo('<h2 style="color:black;">Not Found</h2>');
			

		}
			
		?>
		
	</table>
    
	</div>
</body>
</html>
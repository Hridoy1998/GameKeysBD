<?php
require('../controllers/header.php');
require('../model/users.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../img/style.css">
    <title>Buyer information</title>
</head>
<style>
    body
    {
        background-color:#353b48;
    }
</style>
<body>
<h2 align="center" style="color:crimson"><b>Buyer</b></h2>
	<table border="1" align="center">
		<tr>
			<td style="color:cornsilk">GAME NAME</td>
			<td style="color:cornsilk">PRICE</td>
            <td style="color:cornsilk">PLATFROM</td>
            <td style="color:cornsilk">REGION</td>
            <td style="color:cornsilk">GAME TYPE</td>
            <td style="color:cornsilk">DEVICE</td>
			<td style="color:cornsilk">SELLER NAME</td>
			<td style="color:cornsilk">IMAGE</td>
		</tr>

		<?php 
			$value=$_SESSION['search'];
			$con = getConnection();
			$sql = "SELECT * from product where game_name ='{$value}' or id='{$value}'";
			$result = $con->query($sql);
			if($result !== false && $result->num_rows > 0){
				echo('<h2 style="color:black;">Found</h2>');
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td style="color:cornsilk"><?=$row["game_name"]?></td>
			<td style="color:cornsilk"><?=$row["price"]?></td>
            <td style="color:cornsilk"><?=$row["platfrom"]?></td>
            <td style="color:cornsilk"><?=$row["region"]?></td>
            <td style="color:cornsilk"><?=$row["gametype"]?></td>
            <td style="color:cornsilk"><?=$row["device"]?></td>
			<td style="color:cornsilk"><?=$row["seller_name"]?></td>
			<td><img src="<?=$row["img"]?>" height="80" width="80"></td>
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
    <table align="center">
    <tr>
         <td>
		 <a href="search.php" align="center">Back</a>
         </td>
        </tr>
    </table>
</body>
</html>
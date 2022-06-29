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
<h2 align="center" style="color:crimson"><b>Seller</b></h2>
	<table border="1" align="center">
		<tr>
			<th><h2 style="color:cornsilk">ID</h2></th>
			<th><h2 style="color:cornsilk">First Name</h2></th>
			<th><h2 style="color:cornsilk">Last Name</h2></th>
			<th><h2 style="color:cornsilk">Username</h2></th>
			<th><h2 style="color:cornsilk">Date of Birth</h2></th>
			<th><h2 style="color:cornsilk">gender</h2></th>
            <th><h2 style="color:cornsilk">Email</h2></th>
            <th><h2 style="color:cornsilk">Phone number</h2></th>
            <th><h2 style="color:cornsilk">Password</h2></th>
			<th><h2 style="color:cornsilk">TYPE</h2></th>
			<th><h2 style="color:cornsilk">Image</h2></th>
		</tr>

		<?php 
			 $value=$_SESSION['search'];
			 $con = getConnection();
			 $sql = "SELECT * from user where (username ='{$value}'or id='{$value}' or email='{$value}') and type='Seller'";
			 $result = $con->query($sql);
			 if($result !== false && $result->num_rows > 0){
				echo('<h2 style="color:black;">Found</h2>');
			 while($row = $result->fetch_assoc()) {

		?>
		<tr>
			<td style="color:cornsilk"><?=$row["id"]?></td>
			<td style="color:cornsilk"><?=$row["first_name"]?></td>
			<td style="color:cornsilk"><?=$row["last_name"]?></td>
			<td style="color:cornsilk"><?=$row["username"]?></td>
            <td style="color:cornsilk"><?=$row["DOB"]?></td>
            <td style="color:cornsilk"><?=$row["gender"]?></td>
            <td style="color:cornsilk"><?=$row["email"]?></td>
            <td style="color:cornsilk"><?=$row["phone_number"]?></td>
			<td style="color:cornsilk"><?=$row["password"]?></td>
			<td style="color:cornsilk"><?=$row["type"]?></td>
			<td><img src="<?=$row["img"]?>" height="80" width="80"></td>
		</tr>

		<?php 

			}
		}
		else{
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
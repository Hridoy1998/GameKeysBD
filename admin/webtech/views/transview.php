<?php 
require('../controllers/header.php');
require('../model/users.php');
$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<script src="../js/aTagcollector.js"></script>
    <title>Transaction</title>
	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
	font-size: 20px;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<h2 align="center" style="color:crimson"><b>Transaction Request List</b></h2>
	<table id="customers" id="customers">

		<?php 
      $id= $_GET['transV'];
			$con = getConnection();
			$sql = "SELECT * FROM transaction where id='{$id}'";
			$result = $con->query($sql);
			if ($result->num_rows > 0)
			{
			while($row = $result->fetch_assoc()) {
		?>
		<tr><th>ID : <?=$row["id"]?></th></tr>
        <tr><th>DATE : <?=$row["date"]?></th></tr>
        <tr><th>BUYER : <?=$row["buyer"]?></th></tr>
        <tr><th>SELLER : <?=$row["seller"]?></th></tr>
        <tr><th>GAME NAME : <?=$row["game_name"]?></th></tr>
        <tr><th>QUANTITY : <?=$row["quantity"]?></th></tr>
        <tr><th>PRICE : <?=$row["price"]?></th></tr>
        <tr><th>PAYMENT METHOD : <?=$row["pay_method"]?></th></tr>
		<?php 
				}
			}
			else
			{
				echo("<h2 align='center'>No Request</h2>");
			}
		?>
		
	</table><br>
    <a href="admin.php" align="center">Back</a><br><br>
    
</body>
</html>
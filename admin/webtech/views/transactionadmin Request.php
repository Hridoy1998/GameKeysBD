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
		<tr>
			<th>ID</th>
			<th>DATE</th>
			<th>BUYER</th>
			<th>SELLER</th>
			<th>GAME NAME</th>
			<th>QUANTITY</th>
            <th>PRICE</th>
            <th>PAYMENT METHOD</th>
            <th>Action</th>
            
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM transactionap ";
			$result = $con->query($sql);
			if ($result->num_rows > 0)
			{
				$num_rows=$result->num_rows;
				$_SESSION['reqT']=$num_rows;
				echo("<h2 align='center'>$num_rows Request</h2>");
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["id"]?></td>
			<td ><?=$row["date"]?></td>
			<td ><?=$row["buyer"]?></td>
			<td ><?=$row["seller"]?></td>
            <td ><?=$row["game_name"]?></td>
            <td ><?=$row["quantity"]?></td>
            <td ><?=$row["price"]?></td>
            <td ><?=$row["pay_method"]?></td>
			<td>
				<input type="button" id="Appprove" value="Appprove" name="Appprove" onclick="return TransactionApp(<?php echo $row['id'];?>)">
                <input type="button" id="Rejact" value="Rejact" name="Rejact" onclick="return TransactionRec(<?php echo $row['id'];?>)">
				
			</td>
		</tr>

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
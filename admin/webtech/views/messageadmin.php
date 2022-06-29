<?php 
require('../controllers/header.php');
require('../model/users.php');
$username=$_SESSION['name'];
$email=$_SESSION['email'];
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
    <title>Message</title>
</head>
<body>

<h2 align="center" style="color:crimson"><b>Messages List</b></h2>
	<table border="1" align="center" id="customers">
		<tr>
			<th>DATE</h2></th>
			<th>SENDER</h2></th>
			<th>MESSAGE</h2></th>
			<th>ACTION</h2></th>
		</tr>

		<?php 
			$con = getConnection();
            //$sql1="SELECT Top 1 * From mail  Order By Column_Name Desc";
			$sql = "SELECT * FROM mail where receiver='{$email}'ORDER BY id DESC";
			$result = $con->query($sql);
			if ($result !== false && $result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["date"]?></td>
			<td ><?=$row["sender"]?></td>
			<td ><?=$row["message"]?></td>
			<td>
				<input type="button" id="VIEW" value="VIEW" name="VIEW" onclick='return viewmessagetag("<?php echo $row["sender"];?>")'>
				
			</td>
		</tr>

		<?php 
				}
			}
			else
			{
				echo("Something wrong... please try agin....!");
			}
		?>
		
	</table><br>
	<input type="button" align="center" id="back" name="back" value="BACK" onclick="return back()">
    
</body>
</html>
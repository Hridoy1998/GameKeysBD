<?php 
require('../controllers/header.php');
require('../model/users.php');
$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head><style>
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
	<script src="../js/buyeraccessadmin.js"></script>
    <title>Game list</title>
</head>
<body>

<h2 align="center" style="color:crimson"><b>Game List</b></h2>
	<table id="customers">
		<tr>
			<th >ID</th>
            <th >DATE</th>
			<th >GAME NAME</th>
            <th >BUYER NAME</th>
            <th >IMAGE</th>
            <th >ACTION</th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM photo";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["id"]?></td>
			<td ><?=$row["date"]?></td>
			<td ><?=$row["name"]?></td>
			<td ><?=$row["buyer"]?></td>
			<td><img src="<?=$row["pic"]?>" height="80" width="80"></td>
			<td>
			<input type="button" id="DELETE" value="DELETE" name="DELETE" onclick="return buyerpostPhotodeletebyadmin(<?php echo $row['id'];?>)">
			</td>
		</tr>

		<?php 
				}
			}
			else
			{
				echo("the table is empty");
			}
		?>
	</table>
    
</body>
</html>
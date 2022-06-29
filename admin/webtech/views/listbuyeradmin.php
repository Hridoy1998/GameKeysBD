<?php 
require('../controllers/header.php');
require('../model/users.php');
$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="../js/aTagcollector.js"></script>
		<script src="../js/blocklist.js"></script>

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
    <title>Buyer list</title>
</head>
<body>

<h2 align="center" style="color:crimson"><b>Buyer List</b></h2>
	<table border="1" align="center" id="customers">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Date of Birth</th>
			<th>gender</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Password</th>
			<th>Image</th>
			<th>Action</th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM user where type='Buyer'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["id"]?></td>
			<td ><?=$row["first_name"]?></td>
			<td ><?=$row["last_name"]?></td>
			<td ><?=$row["username"]?></td>
            <td ><?=$row["DOB"]?></td>
            <td ><?=$row["gender"]?></td>
            <td ><?=$row["email"]?></td>
            <td ><?=$row["phone_number"]?></td>
			<td ><?=$row["password"]?></td>
			<td><img src="<?=$row["img"]?>" height="80" width="80"></td>
			<td>
				<input type="button" id="VIEW" value="VIEW" name="VIEW" onclick="return viewBprofiletag(<?php echo $row['id'];?>)">

				<input type="button" id="EDIT" value="EDIT" name="EDIT" onclick="return editBprofiletag(<?php echo $row['id'];?>)">

				<input type="button" id="BLOCK" value="BLOCK" name="BLOCK" onclick="return blockbuyer(<?php echo $row['id'];?>)">
				
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
		
	</table>
    
</body>
</html>
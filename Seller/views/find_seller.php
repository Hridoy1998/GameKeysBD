<?php
require('../controllers/header.php');
require('../model/users.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/myprofile.css">
	<title>Find a Seller</title>
</head>
<div class="container">

	<body>
		

		<table border="1" align="center">
		

			<tr align="center">
				<tr align="center">
					<td align="center">
			<h2 align="center" style="color:crimson"><b>Seller List</b></h2>
		<h4 align="center"><a href="../views/buyer_dashboard.php">Back</a></h4>
		</td>	
	</tr>
				<th>
					<h3>First Name</h3>
				</th>
				<th>
					<h3>Last Name</h3>
				</th>
				<th>
					<h3>Username</h3>
				</th>
				<th>
					<h3>Date of Birth</h3>
				</th>
				<th>
					<h3>gender</h3>
				</th>
				<th>
					<h3>Email</h3>
				</th>
				<th>
					<h3>Phone number</h3>
				</th>

				<th>
					<h3>Image</h3>
				</th>
			</tr>

			<?php
			$con = getConnection();
			$sql = "SELECT * FROM user where type='Seller'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
			?>
					<tr>

						<td><?= $row["first_name"] ?></td>
						<td><?= $row["last_name"] ?></td>
						<td><?= $row["username"] ?></td>
						<td><?= $row["DOB"] ?></td>
						<td><?= $row["gender"] ?></td>
						<td><?= $row["email"] ?></td>
						<td><?= $row["phone_number"] ?></td>


						<td><img src="<?= $row["img"] ?>" height="80" width="80"></td>
						<td> <button class="btn"><a href="contact_seller.php?id=<?= $row["id"] ?> ">Contact</a></button></td>
					</tr>

			<?php
				}
			} else {
				echo ("the table is empty");
			}
			?>
		</table>
</div>

<div align="center" class ="">

        <input align="center" type="text" placeholder="Search...." id = "searchText" class="form-control">
		<button align="center" class="btn btn-primary" id="searchBtn" >Search</button>

</div>




</body>

</html>
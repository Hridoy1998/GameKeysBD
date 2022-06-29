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
	<title>Profile</title>
</head>

<body>
	<div class="container">

		<?php

		$name = $_SESSION['buyer_name'];
		$con = getConnection();
		$sql = "SELECT * FROM user where username ='{$name}' ";

		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		?>

				<table border="1" colspan="3" align="center">


					<tr>
					<tr>
						<td align="center">
							<h1 align="center"> PROFILE DETAILS</h1>
						</td>
					</tr>

					<td>Profile Picture</td>
					<td>
						<img src="<?= $row["img"] ?>" height="100px" width="100px" alt="">
					</td>

					</tr>

					<tr>

						<td>First Name:</td>
						<td><?= $row["first_name"] ?></td>

					</tr>
					<tr>

						<td>last Name:</td>
						<td><?= $row["last_name"] ?></td>

					</tr>

					<tr>
						<td>User Name: </td>
						<td><?= $row["username"] ?></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td> <?= $row["email"] ?></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td> <?= $row["password"] ?></td>
					</tr>

					<tr>
						<td>User Type: </td>
						<td> <?= $row["type"] ?></td>
					</tr>
					<tr>
						<td><a href="edit_profile.php" class="btn">Edit</a>
							<a href="../views/buyer_dashboard.php" class="btn">Back</a>
						</td>

					</tr>

				</table>

		<?php
			}
		} else {
			echo ("the table is empty");
		}
		?>
	</div>

</body>

</html>
<?php 
	require('../controllers/header.php');
?>

<html>
<head>
	<title>Add Game</title>
</head>
<body>
	<form method="POST" action="../controllers/addCheck.php">

		<a href="home.php"> Back</a> |
		<a href="login.php"> logout</a>

		<fieldset>
			<legend>Add A New Game</legend>
		<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" value="">
				</td>
			</tr>
			<tr>
				<td>Price</td>
				<td>
					<input type="price" name="price" value="">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Create">
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>
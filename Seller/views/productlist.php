<?php 
	require('../controllers/header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Userlist</title>
</head>
<body>

	<a href="home.php"> Back</a> |
	<a href="../controllers/logout.php"> logout</a>

	<br><br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
            <th>Price</th>
            <th>rating</th>
            <th>Product Info</th>
		</tr>

		<?php 

			$file = fopen('../model/games.txt', 'r');

			while(!feof($file)){ 
				$user = fgets($file);
				$abc = explode("|", $user);
		?>
		<tr>
			<td><?=$abc[0]?></td>
			<td><?=$abc[1]?></td>
			<td><?=$abc[2]?></td>
			<td><?=$abc[3]?></td>

			<td>
				<a href="edit.php?id=<?=$abc[0]?>"> EDIT </a> |
				<a href="delete.php?id=<?=$abc[0]?>"> DELETE </a>
			</td>
		</tr>

		<?php 
			}
		?>
		
	</table>
</body>
</html>
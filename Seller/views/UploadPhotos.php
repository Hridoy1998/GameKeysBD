<?php
require('../controllers/header.php');
require('../model/usersmodel.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/myprofile.css">
	<title></title>
</head>

<body>
	
                    
                   <br><br>     
						<h1 align="center">Your Upload Game photos</h1>	
                       
	<div class="container">

		<?php

		$name = $_SESSION['buyer_name'];
		$con = getConnection();
		$sql = "SELECT * FROM photo where buyer='{$name}' ";

		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		?>

	<div class="container">					
               <table border="1">
				   <tr>


				   <tr>
                        <td>Photo:</td>
						<td><img src="<?= $row["pic"] ?>" height="200px" width="300px" alt=""></td>	
                        </tr>
					   <tr>
						<td>Date:</td>
						<td><?= $row["date"] ?></td>
						</tr>
						
						<tr>
						<td>Game Name:</td>
						<td><?= $row["name"] ?></td>
						</tr>
						</tr>
				</table>
         </div>


		<?php
			}
		} else {
			echo ("the table is empty");
		}
		?>
	</div>



    
</body>

</html>
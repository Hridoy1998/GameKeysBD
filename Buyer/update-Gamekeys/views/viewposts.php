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
    <title>Document</title>
    <link rel="stylesheet" href="../css/myprofile.css">
    <script src="../js/delpost.js"></script>
</head>
<body>
    
<h1 align="center" style="color:crimson"><b>Posts</b></h1>
<h3 align="center"><a href="../views/buyer_dashboard.php">Go Back</a></h3>
<div class="container">

           
	<table border="1" align="center">
		<tr>
            <th><h4 >Post Serials</h4></th>
			<th><h4 >Post Date</h4></th>
			<th><h4 >Game Name</h4></th>
            <th><h4 >Game Datails</h4></th>
            
		</tr>

		<?php 
        $status = show_buyerpost();

        if($status)
		{
            $name=$_SESSION['buyer_name'];
            $con = getConnection();
            $sql = "SELECT * FROM buyerpost where buyer='{$name}'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["id"]?></td>
			<td ><?=$row["date"]?></td>
            <td ><?=$row["name"]?></td>
            <td ><?=$row["details"]?></td>
            

			<td>
                <input type="button" id="deletep" value="DELETE" name="delete" onclick="return deletep(<?php echo $row['id'];?>)">
                
			</td>
		</tr>
        <?php
                }
            }
        }
        else
		{
			echo("Something wrong... please try agin....!");
		}	
        ?>
	</table>
    </div>
</body>
</html>
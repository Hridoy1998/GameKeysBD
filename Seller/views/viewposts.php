
<?php 
require('../controllers/header.php');
require('../model/admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 align="center"><a href="../views/buyer_dashboard.php">Go Back</a></h3>    
<h1 align="center" style="color:crimson"><b>Posts</b></h1>
           
	<table border="1" align="center">
		<tr>
            <th><h2 >Post Serials</h2></th>
			<th><h2 >Post Date</h2></th>
			<th><h2 >Game Name</h2></th>
            <th><h2 >Game Datails</h2></th>
            
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
				
                <a name="dltbtn" href="../views/delete_post.php?delete=<?=$row["id"]?>"> DELETE </a>
                
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

</body>
</html>
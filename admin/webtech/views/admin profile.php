<?php 
require('../controllers/header.php');
require('../model/users.php');
?>
<html>

<head>
    <title> Admin profile</title>
    <link rel="stylesheet" type="text/css" href="../img/style.css">
</head>

<body>
    <div id="show1">
    <form name=''method="POST" action="../controllers/admin_profile_update.php" enctype="multipart/form-data" align="center">
        
        <table border="1" colspan="3" align="center">
            <h2>ADMIN PROFILE</h2>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>

            <?php 
			$con = getConnection();
			$sql = "SELECT * FROM user where type='Admin'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
        
                   <img src="<?=$row["img"]?>" height=200px width=180px alt="">

            
            <tr>
                <td>First Name: </td>
                <td> <?=$row["first_name"]?></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td> <?=$row["last_name"]?></td>
            </tr>
            <tr>
                <td>Username: </td>
                <td><?=$row["username"]?></td>
            </tr>
            <tr>
                <td>Date Of Birth: </td>
                <td><?=$row["DOB"]?></td>
                
            </tr>
            <tr>
                <td>Gender: </td>
                <td> <?=$row["gender"]?> </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><?=$row["email"]?></td>
            </tr>

            <tr>
                <td>Phone number: </td>
                <td><?=$row["phone_number"]?></td>
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
            <input type="file" name="profilepic" accept="image/*"> 
            <input type="submit" name ="up" value="UPLOAD PROFILE PICTURE">
            <br> 
       
            <a href="admin.php" align="center" style="color:black;">Back</a>

    </form>
   </div>
</body>

</html>
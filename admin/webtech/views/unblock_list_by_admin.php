<?php 
	require('../controllers/header.php');
    require('../model/admin.php');
	$noticeEdit= $_GET['unblock'];

    $con = getConnection();
    $sql = "SELECT * FROM block_list where id='{$noticeEdit}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../img/style.css">
	<title>Edit buyer</title>
</head>
<style>
	body{
		background-color:#353b48;
	}
</style>
<body>

	<a href="admin.php"> Back</a> |
	<a href="logout.php"> logout</a>

	<form method="POST" action="../controllers/unblock_check.php" align="center">
    <h2>Unblock Account</h2>
            <table border="1" align="center" height="300" width="300">
            <tr align="center">
            <td >
            <img src="<?=$row["img"]?>" alt="" height="80" width="80">
            <br>
            <input type="text" name="id" placeholder="ID" value="<?=$row["id"]?>">
            <input type="text" name="first_name" placeholder="First name" value="<?=$row["first_name"]?>">
            <input type="text" name="last_name" placeholder="Last name" value="<?=$row["last_name"]?>">
            <input type="text" name="username" placeholder="Create Username" value="<?=$row["username"]?>">
            <input type="date" name="dob" value="<?=$row["DOB"]?>">
                <input type="radio" name="gender" value="female"
                <?php if ($row["gender"]== "female") 
                {
                    echo"checked";
                }
                ?>
                >Female 
                
                <input type="radio" name="gender" value="male" 
                <?php
                    if ($row["gender"]== "male") 
                    {
                        echo"checked";
                    }
                ?>
                >Male
                <input type="radio" name="gender" value="other"
                <?php
                    if ($row["gender"]== "other") 
                    {
                        echo"checked";
                    }
                ?>
                >Other 
            <input type="text" name="email" placeholder="Email" value="<?=$row["email"]?>">
            <input type="text" name="phonenumber" placeholder="Phone Number" value="<?=$row["phone_number"]?>">
            <input type="text" name="password" placeholder="Create Password" value="<?=$row["password"]?>">
            
            <input type="radio" name="type" value="Seller"
                <?php if ($row["type"]== "Seller") 
                {
                    echo"checked";
                }
                ?>
                >Seller 
                
                <input type="radio" name="type" value="Buyer" 
                <?php
                    if ($row["type"]== "Buyer") 
                    {
                        echo"checked";
                    }
                ?>
                >Buyer
                <br><br>
                <input type="text" name="img" value="<?=$row["img"]?>" id="">

            <input type="submit" name="unblock" value="UNBLOCK"><br>
            <a href="admin.php">Back</a><br><br>
            </td>    
        </tr>    
        </table>
	</form>
</body>
</html>
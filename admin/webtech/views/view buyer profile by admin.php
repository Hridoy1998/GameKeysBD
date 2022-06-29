<?php 
require('../controllers/header.php');
require('../model/users.php');
?>
<html>

<head>
    <title> Buyer profile</title>
        <script src="../js/aTagcollector.js"></script>
        <script src="../js/View_block.js"></script>
		
    <link rel="stylesheet" type="text/css" href="../img/style.css">
</head>

<body>
    <div id="show">
    <form method="POST" action="" enctype="multipart/form-data" align="center">
        
        <table border="1" colspan="3" align="center">
            <h2>BUYER PROFILE</h2>
            <?php 
            $noticeEdit= $_GET['view'];
			$con = getConnection();
			$sql = "SELECT * FROM user where type='Buyer' and id='{$noticeEdit}'";
			$result = $con->query($sql);
			if ($result !== false && $result->num_rows > 0) {
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
        <br>
        <input type="button" id="EDIT" value="EDIT" name="EDIT" onclick="return editBprofiletag(<?php echo $noticeEdit;?>)">

        <input type="button" id="BLOCK" value="BLOCK" name="BLOCK" onclick="return Vblockbuyer(<?php echo $noticeEdit;?>)">

    </form>
   </div>
</body>


</html>
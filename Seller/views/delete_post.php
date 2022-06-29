<?php 
	require('../controllers/header.php');
    require('../model/admin.php');
	$id= $_GET['delete'];

    $con = getConnection();
    $sql = "SELECT * FROM buyerpost where id='{$id}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>delete post</title>
</head>

<body>
    <form action="../controllers/delete_postcheck.php" method="POST" align="center">
    <table border="1" align="center" height="450" width="500">
        <tr>
            <td>
                Post ID
            </td>
            <td>
                <input type="number"name="id" value="<?=$row["id"]?>">
            </td>
            
        </tr>
            <tr>
   
                <td>Post date</td>
                <td>
                    <input type="date" name="postdate"value="<?=$row["date"]?>">
                </td>
            </tr>
   
            <tr>
   
   <td>GAme Name</td>
   <td>
   <input type="text" id='name'name="gamename"value="<?=$row["name"]?>">
   </td>
</tr>
            

            <tr>
                <td>Message</td>
                <td>
                    <textarea name="gamedetails" placeholder="Enter the notice" id="" cols="30" rows="10"><?=$row["details"]?></textarea>
                </td>
            </tr>
            
        </table><br><br>
        <input type="submit" name="deletebtn" value="DELETE"><br><br>
    </form>
		
	</table>
    </form>
  
</body>
</html>
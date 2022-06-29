<?php 
	require('../controllers/header.php');
    require('../model/usersmodel.php');
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
    <link rel="stylesheet" href="../css/myprofile.css">
    <script src="../js/delpost.js"></script>
</head>

<body>
<div class="container">
    <form action="../controllers/delete_postcheck.php" method="POST" align="center">
    <table border="1" align="center" height="450" width="500">
        <tr>
            <td>
                Post ID
            </td>
            <td>
                <input type="number"name="id" id="id" value="<?=$row["id"]?>">
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
                    <textarea name="gamedetails" placeholder="" id="" cols="30" rows="10"><?=$row["details"]?></textarea>
                </td>
               
            </tr>

            <tr>
                <td>
                    <a class="btn" href="../views/viewposts.php">Back</a>
                </td>
            <td>
                
                <button class="btn" name="deletebtn" id="deletebtn" onclick="return del(<?php echo $row['id'];?>)">DELETE</button>
            </td>
            </tr>
            
        </table><br><br>
        <?php if(isset($_GET['msg'])){
        $msg=$_GET['msg'];
        echo("<script>alert('$msg')</script");}
        ?>
    </form>
		
	</table>
    </form>
</div>
</body>
</html>
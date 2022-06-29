<?php 
	require('../controllers/header.php');
    require('../model/admin.php');
	$noticeEdit= $_GET['noticeEdit'];

    $con = getConnection();
    $sql = "SELECT * FROM notices where id='{$noticeEdit}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../img/style.css">
<script src="../js/notice.js"></script>
    <title>notice edit</title>
</head>
<style>
	body{
		background-color:#353b48;
	}
</style>
<body>
    <form action="../controllers/notice_board_edit_store.php" method="POST" align="center">
    <table border="1" align="center" height="450" width="500">
        <tr>
            <span id="e"></span>
            <td>
                Enter ID
            </td>
            <td>
                <input type="number" id="id" name="id" value="<?=$row["id"]?>">
            </td>
            
        </tr>
            <tr>
            <img src="../img/warning.gif" alt="" height="80" width="80"><br>
                <td>Notice date</td>
                <td>
                    <input type="date" id="date" name="notice_date"value="<?=$row["date"]?>">
                </td>
            </tr>
            <tr>
                <td>Enter the notice</td>
                <td>
                    <textarea name="notice_bar" id="notice_bar" placeholder="Enter the notice" id="" cols="30" rows="10"><?=$row["notice"]?></textarea>
                </td>
            </tr>
            
        </table><br><br>
        <input type="button" id="submit" onclick="return noticbuv()" name="noticebtn" value="UPDATE"><br><br>
    </form>
		
	</table>
    </form>
    <table align="center">
            <tr>
                <td>
                <a href="notice board.php" align="center"><h2>Back</h2></a>
                </td>
            </tr>
    </table>
</body>
</html>
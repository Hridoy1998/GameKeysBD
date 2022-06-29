<?php 
require('../controllers/header.php');
require('../model/admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../img/style.css">
<script src="../js/notice.js"></script>
<script src="../js/aTagcollector.js"></script>
    <title>notice board</title>
</head>
<body>

<form action="../controllers/notice_board_store.php" class="show2" method="POST" align="center">
<img src="../img/warning.gif" alt="" height="80" width="80"><br>
    <table border="1" align="center" height="450" width="400">
            <tr>
           

                <td> <br><span id='e'></span>
                    <h2>Notice date</h2>
                    <input type="date" id='date'name="notice_date"value="">
                    
                    </td>
            </tr>
            <tr>
                <td><h2>Enter the notice </h2><br>
                    <textarea name="notice_bar" id='notice_bar'placeholder="Enter the notice" id="" cols="30" rows="10"></textarea><br> 
                    </td>
            </tr>
            
        </table><br><br>
        <input type="button" id="submit"name="noticebtn" value="POST" onclick="return noticebv()"><br><br>
        
    

    </form>
   
    <h2 align="center" style="color:crimson"><b>Notice List</b></h2>
	<table border="1" align="center">
		<tr>
            <th><h2 style="color:cornsilk">Notice ID</h2></th>
			<th><h2 style="color:cornsilk">Notice Date</h2></th>
			<th><h2 style="color:cornsilk">Notice</h2></th>
		</tr>

		<?php 
        $status = show_notices();

        if($status)
		{
            $con = getConnection();
            $sql = "SELECT * FROM notices";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["id"]?></td>
			<td ><?=$row["date"]?></td>
            <td ><?=$row["notice"]?></td>

			<td>
                <button id='edit' onclick="return Noticeedittag(<?php echo $row['id'];?>)">EDIT</button>
                <button id='deleten' onclick="return noticebdv(<?php echo $row['id'];?>)">DELETE</button>
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
    
     <a href="admin.php" align="center">Back</a>          
</body>
</html>
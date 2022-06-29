<?php 
require('../controllers/header.php');
require('../model/users.php');
$username=$_SESSION['name'];
?>
<?php if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
echo("<script>alert('$msg')</script");}?>

<?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../img/style.css">
    <title>Admin Page</title>
	
</head>
	
<body>
	<div id="nab">
	<h1 style="color:crimson"> Admin Dashboard.<h2><?= $username?></h2></h1> 
	<ul>
	<a style="color:cornsilk" href="Home.php">Home</a>
	<a style="color:cornsilk" href="admin profile.php">PROFILE</a> 
	<a style="color:cornsilk" href="create_account_by_admin_for_buyer.php"> Create Buyer Account </a> 
    <a style="color:cornsilk" href="create_account_by_admin_for_seller.php"> Create Seller Account </a> 
	<a style="color:cornsilk" href="block_list_show_by_admin.php"> BLOCK LIST</a> 
	<a style="color:cornsilk" href="notice board.php"> Notice Board</a> 
	<a style="color:cornsilk" href="search.php"> Search</a> 
	<a style="color:cornsilk" href="../controllers/log_out.php"> log out</a> 
	</ul>
	
	</div>
	
    <div id="show">
    <br><br>
    <h2 align="center" style="color:crimson"><b>Buyer List</b></h2>
	<table border="1" align="center">
		<tr>
			<th><h2 style="color:cornsilk">ID</h2></th>
			<th><h2 style="color:cornsilk">First Name</h2></th>
			<th><h2 style="color:cornsilk">Last Name</h2></th>
			<th><h2 style="color:cornsilk">Username</h2></th>
			<th><h2 style="color:cornsilk">Date of Birth</h2></th>
			<th><h2 style="color:cornsilk">gender</h2></th>
            <th><h2 style="color:cornsilk">Email</h2></th>
            <th><h2 style="color:cornsilk">Phone number</h2></th>
            <th><h2 style="color:cornsilk">Password</h2></th>
			<th><h2 style="color:cornsilk">Image</h2></th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM user where type='Buyer'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td style="color:cornsilk"><?=$row["id"]?></td>
			<td style="color:cornsilk"><?=$row["first_name"]?></td>
			<td style="color:cornsilk"><?=$row["last_name"]?></td>
			<td style="color:cornsilk"><?=$row["username"]?></td>
            <td style="color:cornsilk"><?=$row["DOB"]?></td>
            <td style="color:cornsilk"><?=$row["gender"]?></td>
            <td style="color:cornsilk"><?=$row["email"]?></td>
            <td style="color:cornsilk"><?=$row["phone_number"]?></td>
			<td style="color:cornsilk"><?=$row["password"]?></td>
			<td><img src="<?=$row["img"]?>" height="80" width="80"></td>
			<td>
				<a style="color:aliceblue" href="view buyer profile by admin.php?view=<?=$row["id"]?>"> VIEW </a>
				<a style="color:aliceblue" href="edit buyer.php?editbuyer=<?=$row["id"]?>"> EDIT </a> 
				<a style="color:aliceblue" href="block_list_by_admin.php?block=<?=$row["id"]?>"> BLOCK </a>
			</td>
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
    
    <br><br>
    <h2 align="center" style="color:crimson"><b>Seller List</b></h2>
	<table border="1" align="center">
		<tr>
			<th><h2 style="color:cornsilk">ID</h2></th>
			<th><h2 style="color:cornsilk">First Name</h2></th>
			<th><h2 style="color:cornsilk">Last Name</h2></th>
			<th><h2 style="color:cornsilk">Username</h2></th>
			<th><h2 style="color:cornsilk">Date of Birth</h2></th>
			<th><h2 style="color:cornsilk">gender</h2></th>
            <th><h2 style="color:cornsilk">Email</h2></th>
            <th><h2 style="color:cornsilk">Phone number</h2></th>
            <th><h2 style="color:cornsilk">Password</h2></th>
			<th><h2 style="color:cornsilk">Image</h2></th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM user where type='Seller'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td style="color:cornsilk"><?=$row["id"]?></td>
			<td style="color:cornsilk"><?=$row["first_name"]?></td>
			<td style="color:cornsilk"><?=$row["last_name"]?></td>
			<td style="color:cornsilk"><?=$row["username"]?></td>
            <td style="color:cornsilk"><?=$row["DOB"]?></td>
            <td style="color:cornsilk"><?=$row["gender"]?></td>
            <td style="color:cornsilk"><?=$row["email"]?></td>
            <td style="color:cornsilk"><?=$row["phone_number"]?></td>
			<td style="color:cornsilk"><?=$row["password"]?></td>
			<td><img src="<?=$row["img"]?>" height="80" width="80"></td>
			<td>
				<a style="color:aliceblue" href="view seller profile by admin.php?view=<?=$row["id"]?>"> VIEW </a>
				<a style="color:aliceblue" href="edit seller.php?editseller=<?=$row["id"]?>"> EDIT </a> 
				<a style="color:aliceblue" href="block_list_by_admin.php?block=<?=$row["id"]?>"> BLOCK </a>
			</td>
		</tr>

		<?php 
				}
			}
			else
			{
				echo("<h2>The table is empty.....</h2>");
			}
		?>
	</table>
	<br><br>
	<h2 align="center" style="color:crimson"><b>Game List</b></h2>
	<table border="1" align="center">
		<tr>
			<td style="color:cornsilk">ID</td>
			<td style="color:cornsilk">GAME NAME</td>
			<td style="color:cornsilk">PRICE</td>
			<td style="color:cornsilk">QUANTITY</td>
            <td style="color:cornsilk">PLATFROM</td>
            <td style="color:cornsilk">REGION</td>
            <td style="color:cornsilk">GAME TYPE</td>
            <td style="color:cornsilk">DEVICE</td>
			<td style="color:cornsilk">DATE</td>
			<td style="color:cornsilk">SELLER NAME</td>
			<td style="color:cornsilk">IMAGE</td>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM product";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td style="color:cornsilk"><?=$row["id"]?></td>
			<td style="color:cornsilk"><?=$row["game_name"]?></td>
			<td style="color:cornsilk"><?=$row["price"]?></td>
			<td style="color:cornsilk"><?=$row["quantity"]?></td>
            <td style="color:cornsilk"><?=$row["platfrom"]?></td>
            <td style="color:cornsilk"><?=$row["region"]?></td>
            <td style="color:cornsilk"><?=$row["gametype"]?></td>
            <td style="color:cornsilk"><?=$row["device"]?></td>
			<td style="color:cornsilk"><?=$row["date"]?></td>
			<td style="color:cornsilk"><?=$row["seller_name"]?></td>
			<td><img src="<?=$row["img"]?>" height="80" width="80"></td>
			<td>
				<a style="color:aliceblue" href="edit Game by admin.php?editgame=<?=$row["id"]?>"> EDIT </a> 
				<a style="color:aliceblue" href="delete Game by admin.php?deletegame=<?=$row["id"]?>"> DELETE </a>
			</td>
		</tr>

		<?php 
				}
			}
			else
			{
				echo("the table is empty");
			}
		?>
	</table>
	</div>		
</body>
</html>
<?php 
	require('../controllers/header.php');
    require('../model/admin.php');
	$noticeEdit= $_GET['editbuyer'];

    $con = getConnection();
    $sql = "SELECT * FROM user where id='{$noticeEdit}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION['pic']=$row['img']
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../img/style.css">
<script src="../js/edit_by_admin.js"></script>
	<title>Edit buyer</title>
</head>
<body>

<div id="nab">
	<h1 style="color:crimson"> Admin Dashboard</h1> 
	<ul>
	<a style="color:cornsilk" href="Home.php">Home</a>
    <a style="color:cornsilk" href="admin.php">Admin Page</a>
	<a style="color:cornsilk" href="admin profile.php">PROFILE</a> 
	<a style="color:cornsilk" href="create_account_by_admin_for_buyer.php"> Create Buyer Account </a> 
    <a style="color:cornsilk" href="create_account_by_admin_for_seller.php"> Create Seller Account </a> 
	<a style="color:cornsilk" href="block_list_show_by_admin.php"> BLOCK LIST</a> 
	<a style="color:cornsilk" href="notice board.php"> Notice Board</a> 
	<a style="color:cornsilk" href="search.php"> Search</a> 
	<a style="color:cornsilk" href="../controllers/log_out.php"> log out</a> 
	</ul>
	
	</div>
    
<div id="show1">
	<form method="POST"  action="../controllers/Update buyer by admin.php" enctype="multipart/form-data" align="center">
    <h2>Update Account For Buyer</h2>
    <span align="center" id="e"></span>
            <table border="1" align="center" height="300" width="300">
            <tr align="center">
            <td >
            <img src="<?=$row["img"]?>" height="80" width="80">
            
           
            <input type="text" name="id" id="id"placeholder="ID" value="<?=$row["id"]?>">
            <input type="text" name="first_name" id="first_name"placeholder="First name" value="<?=$row["first_name"]?>">
            <span  id="e1"></span>
            <input type="text" name="last_name" id="last_name"placeholder="Last name" value="<?=$row["last_name"]?>">
            <span  id="e2"></span>
            <input type="text" name="username" id="username"placeholder="Create Username" value="<?=$row["username"]?>">
            <span  id="e3"></span>



            <label for="">Gender</label>
              <select name="gender" id="gender">
                 
                      <option value="female" <?php if ($row["gender"]== "female"){echo"selected";}?>>Female</option>
                      <option value="male"<?php if ($row["gender"]== "male"){echo"selected";}?>>Male</option>
                      <option value="other"<?php if ($row["gender"]== "other"){echo"selected";}?>>Other</option>
                      <option value=""<?php if ($row["gender"]== ""){echo"selected";}?>></option>
              </select>
              <span  id="e4"></span>



            <input type="date" name="dob"id="dob" value="<?=$row["DOB"]?>">
            <span  id="e5"></span>
                
            <br><br>
            <input type="text" name="email" placeholder="Email" id="email"value="<?=$row["email"]?>">
            <span  id="e6"></span>
            <input type="text" name="phonenumber" placeholder="Phone Number" id="phonenumber"value="<?=$row["phone_number"]?>">
            <span  id="e7"></span>
            <input type="text" name="password" placeholder="Create Password" id="password"value="<?=$row["password"]?>">
            <span  id="e8"></span>



            <label for="">Type</label>
              <select name="type" id="type">
                 
                      <option value="Buyer" <?php if ($row["type"]== "Buyer"){echo"selected";}?>>Buyer</option>
                      <option value="Seller"<?php if ($row["type"]== "Seller"){echo"selected";}?>>Seller</option>
                      <option value=""<?php if ($row["type"]== ""){echo"selected";}?>></option>
              </select>
                <span  id="e9"></span>
                
            <input type="button" id="editBuyer"name="editBuyer" value="update" onclick="return editbuyeradmin()"><br>
            <a href="admin.php">Back</a><br><br>
            </td>    
        </tr>    
        </table>
	</form>
</div>
</body>
</html>
<?php
require('../controllers/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../img/style.css">
<script src="../js/regadminb.js"></script>
    <title>Create Account</title>
  
    
</head>
<style>
	body{
		background-color:#353b48;
	}
</style>
<body>

        <form  name="reg-buyer-admin"  action="../controllers/regchek_for_buyer_by_admin.php" method="POST" enctype="multipart/form-data" align="center">
            <h2>Create Account For Buyer</h2>
     	    
            <table border="1" align="center" height="300" width="400">
            <tr >
            <td >
            <img src="../img/user_icon_001.jpg" alt="" height="80" width="80"><br>
            <span id="e"></span>
            
              <input type="text" name="first_name" id="first_name" placeholder="First name" >
              <span id="e1"></span>
      
              <input type="text" name="last_name" id="last_name"placeholder="Last name" >
              <span id="e2"></span>
         
                 
              <input type="text" name="username" id="username"placeholder="Create Username">
              <span id="e3"></span>
          
              <input type="date" name="dob"id="dob" >
              <span id="e4"></span><br><br>

     		      <label for="">Gender</label><br>
              <select name="gender" id="gender">
                <option value=""></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
                <br><br><span id="e5"></span>
     
              <input type="email" name="email" id="email"placeholder="Email" ><br>
              <span id="e6"></span>

              <input type="number" name="phonenumber"id="phonenumber" placeholder="Phone Number"><br>
              <span id="e7"></span>

            
            
            <input type="password" name="password" id="password"placeholder="Create Password"><br>
            <span id="e8"></span>
     		

            <input type="button" id="submit"value="SUBMIT"name="submitNewAccountBuyer" onclick="return Regvalidationbuyer()"><br>
           
            <a href="admin.php" align="center"style="color:black;">Back</a><br><br>
           
            </td>    
        </tr>    
        </table>
        
        </form>
</body>
</html>
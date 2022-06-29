<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../img/style.css">
    <script src="../js/userreg.js"></script>
    <title>Create Account</title>
    
    
</head>
<body>

        <form action="../controllers/regchek_for_seller.php" method="POST" enctype="multipart/form-data" align="center">
            <h2>Create Account for Seller</h2>
            <table border="1" align="center" height="300" width="400">
            <tr >
            <td >
            <img src="../img/user_icon_001.jpg" alt="" height="80" width="80">
            <span id="e"></span>
            
              <input type="text" name="first_name" id="first_name" placeholder="First name" >
              <span id="e1"></span>
      
              <input type="text" name="last_name" id="last_name"placeholder="Last name" >
              <span id="e2"></span>
         
                 
              <input type="text" name="username" id="username"placeholder="Create Username">
              <span id="e3"></span>
          
              <input type="date" name="dob"id="dob" >
              <span id="e4"></span><br>
     		      <label for="">Gender</label>
              <select name="gender" id="gender">
                <option value=""></option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
              </select>
                     <span id="e5"></span>
     
              <input type="text" name="email" id="email"placeholder="Email" >
              <span id="e6"></span>

              <input type="text" name="phonenumber"id="phonenumber" placeholder="Phone Number"><br>
              <span id="e7"></span>

            
            
            <input type="password" name="password" id="password"placeholder="Create Password">
            <span id="e8"></span>

            <input type="file" name="profilepic" id="file" accept="image/*">
     		
            <input type="button" name="submitNewseller" value="SUBMIT" id="submit"  onclick="return regvas()"><br><br>
            <a href="Login.php">back to login</a><br><br>
            </td>    
        </tr>    
        </table>
        
        </form>

</body>
</html>
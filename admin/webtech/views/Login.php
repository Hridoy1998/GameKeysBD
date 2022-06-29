<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../img/style.css">
    <script src="../js/loginvalidation.js"></script>
    <title>Login</title>
    
</head>

<body>


    <form id="form"action="../controllers/login_check.php"  method="POST" align="center" >
    <h2>Log In</h2>
    
        <table border="1" align="center" height="350" width="350">
        <tr>
        <td>
        <img src="../img/user_icon_001.jpg" alt="" height="80" width="80"><br>
        
        <span id="e3"></span>

        <input type="text" name="username" id="username" placeholder="Enter Username or Email" >
        <span id="e1"></span>
     
        
        <input type="current-password" name="password" id="password" placeholder="Enter Password" >
        <span id="e2"></span>
       

        <input type="button" name="submit"id="submit" value="LOGIN"onclick="return loginv()"><br>

        <a href="../controllers/Choose_role.php">create new account</a>
        <a href="Home.php">Home</a><br><br>
     
        </td>    
    </tr>    
    </table>
    </form>
</body>
</html>

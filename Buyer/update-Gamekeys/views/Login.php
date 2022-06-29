<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/loginvalidation.js"></script>
    <title>Login</title>
    
</head>

<body>

<div class="container">
    <form action="../controllers/login_check.php"  onsubmit="return loginv()" method="POST" align="center" >
    <?php if(isset($_GET['msg'])){
        $msg=$_GET['msg'];
        echo("<script>alert('$msg')</script");}?>
    
    
        
        <img src="../img/user_icon_001.jpg" alt="" height="80" width="80"><br>
        <h2>Log In</h2><br><br>
        
        <span id="e3"></span>

        <input class="input-group" type="text" name="username" id="username" placeholder="Enter Username or Email" >
        <span id="e1"></span><br><br>
     
        
        <input class="input-group" type="password" name="password" id="password" placeholder="Enter Password" >
        <span id="e2"></span><br><br>
       

        <input class="btn" type="submit" name="btn"><br>

        <a href="../controllers/Choose_role.php">create new account</a>
        <a href="Home.php">Home</a><br><br>
     
      
    
    </form>
    </div>
</body>
</html>

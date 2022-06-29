<?php 
require('../controllers/header.php');
require('../model/admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Post Game</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/gamepost.js"></script>
</head>
<body>



   
    <br>
    <h1 align="center" class="credit">What Is On Your mind</h1>
    <section class="contact" id="contact">
    
 
       
    <form action="../controllers/game_post.php" onsubmit="return gamepost()" class="show2" method="POST" align="center">

            

            <div class="inputBox">
            <input type="date" id='date'name="postdate" value="">
                    <br><span id='e1'></span>
                <label>Date</label>
            </div>

            <div class="inputBox">
            <span id='e1'></span>
                    <input type="text" id='name'name="gamename"value="">
                    <br><span id='e3'></span>
                <label>Game Name</label>
            </div>

           

            <div class="inputBox">
            <span id='e3'></span>
                    <textarea name="gamedetails" id='details'placeholder="Enter the details" cols="30" rows="10"></textarea><br>
                    <br><span id='e2'></span>
                <label>message</label>
            </div>
            
             
            <input type="submit" class="btn" name="postbtn" value="Publish">
           
            <?php if(isset($_GET['msg'])){
        $msg=$_GET['msg'];
        echo("<script>alert('$msg')</script");}
        ?>
        </form>

    </section><br>
    
              
</body>
</html>
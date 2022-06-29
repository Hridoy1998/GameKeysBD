<?php
require('../controllers/header.php');
require('../model/usersmodel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/gamephotoup.js"></script>
    <title>Share Photos</title>
    
    
    
</head>
<body>

         
        <section class="contact" id="contact">
    
 
       
    <form action="../controllers/sharecheck.php" onsubmit="return photoup()" class="show2" method="POST" align="center" enctype="multipart/form-data">

    <h2>Share Your Gameplay Shots</h2>

            <div class="inputBox">
            <input type="date" id='date'name="postdate" value="">
            <br><span id='e1'></span>
                <label>Date</label>
            </div>

            <div class="inputBox">
            
                    <input type="text" id='name'name="gamename"value="">
                    <br><span id='e3'></span>
                <label>Game Name</label>
            </div>

           

            <div class="inputBox">
            
            <input type="file" name="pic" id="file" accept="image/*">
            <br><span id='e2'></span>
                <label>Upload</label>
            </div>
            
             
            <input type="submit" class="btn" name="upbtn" value="Publish"><br><br>
            <a href="buyer_dashboard.php">Go-back</a><br><br>
           
          
        </form>

    </section><br>


    

</body>
</html>
<?php
require('../controllers/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

<script src="../js/searchgame.js"></script>

    <title>search</title>
    <link rel="stylesheet" href="../css/myprofile.css">
    
</head>

<body>
  <br><br><br>
 
    <form  action="../controllers/search_check.php" method="POST" align="center" >
 
    
        <section class="contact" id="contact">
        
        <h2 style="color:crimson">Search Your Game</h2><br>

            <div class="inputBox">
            <input type="search" name="search" id='search' placeholder="Search" id=""><br>
               <br> <span id='e'></span>
            </div>
          <br>
            <input class="btn" type="button" value='SEARCH'name="btn"id ='submit' onclick="return searchgame()"><br><br>
              <a href="buyer_dashboard.php" >Back</a><br><br>
        </form>

    </section><br>
     
     
     
    
    </form>
    <div>
    <span id='e1'></span>
    </div>


</body>
</html>

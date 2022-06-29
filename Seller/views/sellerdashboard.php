<?php 
require('../controllers/header.php');
require('../model/admin.php');
?>
    
 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Seller</title>
    </head>

    <style>
       body  {
            background-color: darkslategrey;
        }
    </style>

    <body>

        <main>
                    <table  border= "1" width ="100%">
        <tr height ="50px" >
            <td style="color:cornsilk"colspan ="3"> <b>Seller Dashboard </b> </td>
            
        </tr>
        
        <tr height ="200px">

            <td width ="300">
              
                    <h4 style="color:crimson">Hello, <?php echo 

                                $name = $_SESSION['sellername'];
                                

                                ?></h4>
                    <li> <a style="color:cornsilk" href="seller_profile.php">My Profile</a> </li><br>
                    <li> <a style="color:cornsilk"href="../views/Home.php"> Home</a></li>
                    <li> <a style="color:cornsilk"href="../views/gamemodify.php"> Modify Game</a></li>
                    
                    <li> <a style="color:cornsilk"href="../views/json.php">View Transaction </a> </li>
                    <li> <a style="color:cornsilk"href="">Withdrawal </a> </li> <br>
                    <button id="logout-button"><a href="../controllers/log_out.php">Logout</a></button>

                    </td>
                >

                              <td>
          <hr>
           
                        <table id="">
          <hr>
             <h2 style="color:crimson">Top Orders Track List</h2>
             <table  border="1">
                <tr>
                    
                    <th style="color:cornsilk">Name</th>
                    
                    <th style="color:cornsilk">Price</th>

                </tr>
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "admin";
                $con = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM products";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>

                        <tr>


                            

                            <td style="color:cornsilk"><?= $row["name"] ?></td>

                            

                            <td style="color:cornsilk"><?= $row["price"] ?></td>
                        </tr>

                <?php
                    }
                } else {
                    echo ("Something wrong... please try again....!");
                }

                ?>
            </table>
            <h2 style="color:crimson">Notices</h2>
               <table  border="1">
                <tr>

                    <th style="color:cornsilk">Date</th>
                    <th style="color:cornsilk">Notice</th>
                </tr>
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "admin";
                $con = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM notices";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>

                        <tr>


                            <td style="color:cornsilk"><?= $row["date"] ?></td>

                            <td style="color:cornsilk"><?= $row["notice"] ?></td>
                        </tr>

                <?php
                    }
                } else {
                    echo ("Something wrong... please try again....!");
                }

                ?>
               

          
        <table >
                <hr>
                <h2 style="color:crimson">Games Added For Flash sale</h2>
 <div class="Image-card-section container">
      <div class="image-cards">
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../img/crysis.jpeg" height="200" width="180"><img src="../img/farcry.jpeg" height="200" width="180">
              </div>
                
                    <hr>
                        <h2 style="color:crimson">Games Added For Discount sale</h2>
                        <div class="Image-card-section container">
      <div class="image-cards">
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="../img/mortal combat.jpeg" height="200" width="180"><img src="../img/witcher.jpeg" height="200" width="180">
              </div>
               <hr>
                <h2 style="color:crimson">Top buyers</h2>
            <table border="1">
                <tr>
                    <th style="color:cornsilk">Username</th>
                    <th style="color:cornsilk">Email</th>


                </tr>
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "admin";
                $con = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM user where type='buyer'";

                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>

                        <tr>


                            <td style="color:cornsilk"><?= $row["username"] ?></td>

                            <td style="color:cornsilk"><?= $row["email"] ?></td>

                            <td style="color:cornsilk"> <a href="contact_buyer.php?id=<?= $row["id"] ?> ">Contact</a></td>

                        </tr>



                <?php
                    }
                } else {
                    echo ("Something wrong... please try again....!");
                }

                ?>
          
         </tr> 
     </table>  
            
        
</td>
            
        </tr>
     
        </table>

        </main>

    </body>


    <body>

   </body>

    </html>
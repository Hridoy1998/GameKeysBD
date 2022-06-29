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
        <link rel="stylesheet" href="../css/bdstyle.css">
        <title>Buyer</title>
    </head>



    <body>

        <div class="side-menu">



            <ul>
                <li>
                    <h2>Buyer Dashboard</h2>
                <li> </li>

                <li>
                    <h3>Hello, <?php

                                $name = $_SESSION['buyer_name'];
                                echo $name;

                                ?>
                    </h3>
                <li>
                <li> <a href=" my_profile.php">My Profile</a>
                </li>
                <li> <a href="find_seller.php">Find a Seller</a> </li>
                <li> <a href="Buy_game.php">Buy Game</a> </li>
                <li> <a href="recent_bought_games.php">Recent Bought Games</a> </li>
                <li> <a href="Post_game.php">Post For A Game</a> </li>
                <li> <a href="watch_Latest_Trailer.php">Watch Trailer</a> </li>
                <li> <a href="search.php">Search</a> </li>
                <li> <a href="share_photos.php">Share Gameplay Photos</a></li><br>
                <li><a href="../controllers/log_out.php"> log out</a></li>
            </ul>
        </div>

        <div class="container">

            <div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            
                            <a href="../views/upcomming.php"><h2>Upcoming Collections </h2><br> </a>
                            <p align="center">Check and add in your wishlist </p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                        <a href="../controllers/Wishtlist_game.php"><h2>Wishlist </h2><br> </a>
                            
                            <p align="center">Go to wishlist </p>

                        </div>

                    </div>
                    <div class="card">
                        <div class="box">
                        
                         <a href="UploadPhotos.php"> <h2>Game Photos</h2><br> </a>
                            <p align="center">View Upload Photo lists </p>
                        </div>


                    </div>

                    <div class="content-2">


                        <div class="new-games">
                            <div class="title">
                                <h3>Notices</h3>
                                <a href="#" class="btn">View All</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>Notice</th>
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


                                            <td><?= $row["date"] ?></td>

                                            <td><?= $row["notice"] ?></td>



                                        </tr>



                                <?php
                                    }
                                } else {
                                    echo ("Something wrong... please try again....!");
                                }

                                ?>


                            </table>

                            
                        </div>
                        <div class="new-games">
                            <div class="title">
                                <h3>My Recent Posts</h3>
                                <a href="viewposts.php" class="btn">View All</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Post Date</th>
                                    <th>Game Name</th>
                                    <th>Game Datails</th>
                                </tr>
                                <?php 
        $status = show_buyerpost();

        if($status)
		{
            $name=$_SESSION['buyer_name'];
            $con = getConnection();
            $sql = "SELECT * FROM buyerpost where buyer='{$name}'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
		?>
		<tr>
			
			<td ><?=$row["date"]?></td>
            <td ><?=$row["name"]?></td>
            <td ><?=$row["details"]?></td>
            

		</tr>
        <?php
                }
            }
        }
        else
		{
			echo("Something wrong... please try agin....!");
		}	
        ?>
                                



                            </table>

                            
                        </div>


                    </div>

                </div>



    </body>


    </html>




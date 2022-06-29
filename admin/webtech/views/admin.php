<?php 
require('../controllers/header.php');
require('../model/users.php');
$username=$_SESSION['name'];
?>
 <!DOCTYPE html>
    <html lang="en">

    <head>
		<script src="../js/aTagcollector.js"></script>
		<script src="../js/edita.js"></script>
        <script src="../js/editByadmin.js"></script>
        <script src="../js/loginvalidation.js"></script>
        <script src="../js/message.js"></script>
        <script src="../js/notice.js"></script>
        <script src="../js/userreg.js"></script>
        <script src="../js/validation.js"></script>
        <script src="../js/validationseller.js"></script>
        <link rel="stylesheet" href="../img/style1.css">
        <title>Buyer</title>
    </head>



    <body>

        <div class="side-menu">



            <ul>
                <li>
                    <h2>Admin Dashboard</h2>
                <li> </li>

                <li>
                    <h3>Hello, <?php

                                $name = $_SESSION['name'];
                                echo $name;

                                ?>
                    </h3>
                <li>
                <li> <a style="color:cornsilk" href="admin.php">Home</a>
                </li>
                <li> <a style="color:cornsilk" href="admin profile.php">PROFILE</a>  </li>
                <li> <a style="color:cornsilk" href="create_account_by_admin_for_buyer.php"> Create Buyer Account </a>  </li>
				<li><a style="color:cornsilk" href="create_account_by_admin_for_seller.php"> Create Seller Account </a> </li>
				<li><a style="color:cornsilk" href="block_list_show_by_admin.php"> BLOCK LIST</a> </li>
				<li><a style="color:cornsilk" href="notice board.php"> Notice Board</a> </li>
				<li><a style="color:cornsilk" href="search.php"> Search</a> </li>
                <li><a style="color:cornsilk" href="transactionadmin Request.php">Transaction Request (<?php echo $_SESSION['reqT'];?>)</a></li>
				<li><a style="color:cornsilk" href="transactionadmin.php">Transaction</a></li>
				<li><a style="color:cornsilk" href="messageadmin.php">Message</a> </li>
                <li> <a style="color:cornsilk" href="buyergamepostviewbyadmin.php">BUYER GAME POST</a>  </li>
                <li> <a style="color:cornsilk" href="Game request post view by admin.php">GAME REQUEST POST BY BUYER</a>  </li>
				<li><a style="color:cornsilk" href="../controllers/log_out.php"> log out</a> </li>
            </ul>
        </div>

        <div class="container">

		<div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            
                            <a href="../views/listbuyeradmin.php"><h2>Buyer List</h2><br> </a>
                            <p align="center"> view</p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                        <a href="../views/listselleradmin.php"><h2>Seller List </h2><br> </a>
                            
                            <p align="center">view</p>

                        </div>

                    </div>
                    <div class="card">
                        <div class="box">
                        
                         <a href="../views/listgameadmin.php"> <h2>Game List</h2><br> </a>
                            <p align="center">view</p>
                        </div>


                    </div>
				</div>

           
                    <div class="content-2">

					<div class="new-games">
                            <div class="title">
                                <h3>Message</h3>
                                <a href="messageadmin.php" class="btn">View All</a>
                            </div>
                            <table>
                                <tr>
									<th>Date</th>
                                    <th>sender</th>
                                    <th>Message</th>
                                </tr>
								<?php 
								$email=$_SESSION['email'];
								$con = getConnection();
								$sql = "SELECT * FROM mail where receiver='{$email}' ORDER BY id DESC";
								$result = $con->query($sql);
								if ($result !== false && $result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
							?>


                                        <tr>


                                            <td><?= $row["date"] ?></td>
											<td><?= $row["sender"] ?></td>
											<td><?= $row["message"] ?></td>



                                        </tr>
										<?php 
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




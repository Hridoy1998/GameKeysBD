<?php
require('../controllers/header.php');
require('../model/usersmodel.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Buy Game</title>
    <link rel="stylesheet" href="../css/myprofile.css">
    <script src="../js/checkout.js"></script>


</head>
<body>
    <br><br>
<h1 align="center"> <u> Games Store </u></h1>
 <h2 align="center"><a  href="../views/buyer_dashboard.php">back</a></h2>
<div class="container">

    
       
        <form action="../" method="POST" align="center"><br>
            <table border="1" align="center" height="100%" width="100%">
                <tr>

                    <td>GAME NAME</td>
                    <td>PRICE</td>
                    <td>PLATFROM</td>
                    <td>REGION</td>
                    <td>GAME TYPE</td>
                    <td>DEVICE</td>
                    <td>SELLER NAME</td>
                    <td>IMAGE</td>

                </tr>
                <?php
                $con = getConnection();
                $sql = "SELECT * FROM product";
                $result = $con->query($sql);
                if ($result !== false && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {



                ?>
                        <tr>

                            <td><?= $row["game_name"] ?></td>
                            <td><?= $row["price"] ?></td>

                            <td><?= $row["platfrom"] ?></td>
                            <td><?= $row["region"] ?></td>
                            <td><?= $row["gametype"] ?></td>
                            <td><?= $row["device"] ?></td>

                            <td><?= $row["seller_name"] ?></td>
                            <td><img src="<?= $row["img"] ?>" height="80" width="80"></td>
                           

                            <td>
                                <input type="button" id="checkout" value="checkout" onclick="return checkoutv(<?php echo $row['id'];?>)">
                                <?php

                                $_SESSION['gameprice'] = $row['price'];

                                ?>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo ("the table is empty");
                }
                ?>


            </table>
        </form>
</div>

</body>

</html>
<?php

require('../controllers/header.php');
require('../model/users.php');
?>
<html>

<head>
    <title>Checkout</title>
    <script src="../js/buy.js"></script>
</head>

<body>

    <form method="POST" action="../controllers/buycheck.php" enctype="multipart/form-data" align="center">

        <table border="1" colspan="3" align="center">
            <h2>Checkout</h2>
            <?php
            $checkout = $_GET['checkout'];
            $con = getConnection();
            $sql = "SELECT * FROM product where id='{$checkout}'";
            $result = $con->query($sql);

            if ($result !== false && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <img src="<?= $row["img"] ?>" height=200px width=180px alt=""><br><br>


                    <tr>
                        <td>Game Name: </td>
                        <td> <?= $row["game_name"] ?></td>
                    </tr>
                    <tr>
                        <td>Price: </td>
                        <td> <?= $row["price"] ?></td>
                    </tr>
                    <tr>
                        <td>Platfrom: </td>
                        <td><?= $row["platfrom"] ?></td>
                    </tr>
                    <tr>
                        <td>Region: </td>
                        <td><?= $row["region"] ?></td>

                    </tr>
                    <tr>
                        <td>Gametype: </td>
                        <td> <?= $row["gametype"] ?> </td>
                    </tr>
                    <tr>
                        <td>Device: </td>
                        <td><?= $row["device"] ?></td>
                    </tr>

                    <tr>
                        <td>Seller name: </td>
                        <td><?= $row["seller_name"] ?></td>
                    </tr>


            <?php
                    $_SESSION['gamename'] = $row['game_name'];
                    $_SESSION['gameprice'] = $row['price'];
                    $_SESSION['sellername'] = $row['seller_name'];
                }
            } else {
                echo ("Something wrong... please try agin....!");
            }
            ?>



        </table>
        <br>
        <label>Quantity:</label>
        <input type="number" id='quantity' name="quantity" value="quantity"><br>
        <span id='e1'></span><br>
        <label>Choose Payment Method:</label>
        <select name="payment" id='paymentmethod'>
            <option value=""></option>
            <option value="bkash">BKASH</option>
            <option value="nagad">NAGAD</option>
            
        </select><br>
        <span id='e2'></span>
        <input type="button" id="buy" name="buy" value="Buy" onclick="return q()">

        <br> <br>
        <?php if(isset($_GET['msg'])){
        $msg=$_GET['msg'];
        echo("<script>alert('$msg')</script");}
        ?><br>


    </form>

</body>

</html>
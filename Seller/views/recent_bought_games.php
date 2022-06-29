<?php
require('../controllers/header.php');
require('../model/admin.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/myprofile.css">
    <title>History</title>


</head>

<body>
    <div class="container">
        <form action="../" method="POST" align="center"><br>
            <h3>History</h3>
            <table border="1" align="center" height="100%" width="100%">
                <tr>

                    <td>ID</td>
                    <td>Date</td>
                    <td>Buyer name</td>
                    <td>Seller name</td>
                    <td>Game Name</td>
                    <td>Quantity</td>
                    <td>Total Price</td>
                    <td>Payment Method</td>


                </tr>
                <?php

                $name = $_SESSION['buyer_name'];

                $con = getConnection();
                $sql = "SELECT *FROM transaction  where buyer = '{$name}' ORDER by id DESC ";
                $result = $con->query($sql);
                if ($result !== false && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {



                ?>
                        <tr>

                            <td><?= $row["id"] ?></td>
                            <td><?= $row["date"] ?></td>

                            <td><?= $row["buyer"] ?></td>
                            <td><?= $row["seller"] ?></td>
                            <td><?= $row["game_name"] ?></td>
                            <td><?= $row["quantity"] ?></td>
                            <td><?= $row["price"] ?></td>
                            <td><?= $row["pay_method"] ?></td>


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
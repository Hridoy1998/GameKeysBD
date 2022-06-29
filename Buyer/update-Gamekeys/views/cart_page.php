<?php
session_start();

if (isset($_SESSION['flag'])) {

    $connect = mysqli_connect("localhost", "root", "", "admin");

    

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "delete") {
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                if ($values["item_id"] == $_GET["id"]) {
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<h3 align="center">("Item Removed")</h3>';
                    header('location: ../Views/cart_page.php');
                }
            }
        }
    }
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>


    </head>

    <body>
        <a href="../Views/Buy_game.php">Back</a>
        <br />

        <h3>Order Details</h3>

        <table border="1">
            <tr>
                <th width="40%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
            <?php
            if (!empty($_SESSION["shopping_cart"])) {
                $total = 0;
                foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            ?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td> <?php echo $values["item_price"]; ?>TK</td>
                        <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>TK</td>
                        <td><a href="../Views/cart_page.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span>Remove</span></a></td>
                    </tr>
                <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">TK <?php echo number_format($total, 2); ?></td>
                    <td><a href="checkout.php">Buy</a></td>
                </tr>

            <?php
            }
            ?>

        </table>

        <br />
    </body>

    </html>


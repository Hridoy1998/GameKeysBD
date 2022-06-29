<?php
require('../controllers/header.php');
require('../model/users.php');

$id = $_GET['id'];
$conn = getConnection();
$sql = "SELECT * FROM user where id='{$id}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <br><br>
        <table align="center" border="1">
            <tr>
                <td>

                    <form method="POST" action="">

                        <legend>Contact Seller</legend>

                        <table>


                            <tr>
                                <td>Username</td>
                                <td>
                                    <input type="text" name="username" value="<?= $row["username"] ?>">
                                </td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" name="email" value="<?= $row["email"] ?>">
                                </td>
                            </tr>

                            <tr>
                                <td>Message</td>
                                <td>
                                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                                </td>
                            </tr>


                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Send">
                            </td>
            </tr>
        </table>
        <a href="../views/find_seller.php">Back</a>

        </form>
        </td>
        </tr>
        </table>

    </body>

    </html>


 
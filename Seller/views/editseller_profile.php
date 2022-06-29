<?php
require('../controllers/header.php');
require('../model/users.php');
?>


<html>

<head>
    <title>r</title>
</head>

<body>

    <?php

    $name = $_SESSION['sellername'];
    $con = getConnection();
    $sql = "SELECT * FROM user where username ='{$name}' ";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <hr><br>
            <table border="1">
                <tr>
                    <td>

                        <form method="POST" action="../Controllers/sellerupdate_check.php">

                            <legend>Edit Profile</legend>

                            <table>
                                <tr>
                                    <td>Id</td>
                                    <td>
                                        <input type="text" name="id" value="<?= $row["id"] ?>">
                                    </td>
                                </tr>

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
                                    <td>Password</td>
                                    <td>
                                        <input type="text" name="password" value="<?= $row["password"] ?>">
                                    </td>
                                </tr>


                                <td></td>
                                <td>
                                    <input type="submit" name="submit" value="Update">
                                    <a href="../views/seller_profile.php"> Back </a><br>
                                </td>
                </tr>
            </table>
    <?php
        }
    } else {
        echo ("the table is empty");
    }
    ?>
    </form>
    </td>
    </tr>
    </table>
</body>

</html>
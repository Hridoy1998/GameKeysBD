<?php
require('../controllers/header.php');
require('../model/users.php');
?>


<html>

<head>
    <title>r</title>
    <link rel="stylesheet" href="../css/myprofile.css">
</head>

<body>
<div class="container">
    <?php

    $name = $_SESSION['buyer_name'];
    $con = getConnection();
    $sql = "SELECT * FROM user where username ='{$name}' ";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
           <br><br> <br>
            <table border="1" align="center">
                <tr>
                    <td>

                        <form  method="POST" action="../Controllers/update_check.php">

                            <legend>Edit Profile</legend>

                            
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
                                    <input class="btn" type="submit" name="submit" value="Update">
                                    <a class="btn" href="../views/my_profile.php"> Back </a>
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
</div>
</body>

</html>
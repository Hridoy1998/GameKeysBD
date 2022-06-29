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
        <title>Contact</title>
    </head>

    <body>
        <br><br>
        <table align="center" border="1">
            <tr>
                <td>

                    <form name="ContactForm" action="../model/insert.php" 
              onsubmit="return contactinfo()" method="post">

                        <legend align=center > <b> Contact Buyer </b> </legend>
                        <br> <br>

                        <table>
                            <tr>
                                <td></td>
                               
                                <td align= center> 
                                    <label  for="sender">From:</label>
                                    <input type="text" name="sender" value= <?php echo 

                                $name = $_SESSION['sellername'];
                                ?>></td> 
                            </tr>

                            <tr>
                                 <td></td>
                                <td align= center>
                                    <label  for="username">UserName:</label>
        <input type="text" name="username" value="<?= $row["username"] ?>">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td align= center>
            <label  for="email">Email:</label>
        <input  type="email" name="email" value="<?= $row["email"] ?>">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td align= center>
                                    <label  for="message">Message:</label>
        <input  type="text" name="message" id="message">
        <div id="d1"></div>
                                </td>
                            </tr>


                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="submit" >
                            </td>
            </tr>
        </table>
        <script>
            function contactinfo() {
                var message = 
                    document.forms["ContactForm"]["message"];
                
                
                  if (message.value == "") {
                    window.alert("Please enter a message.");
                    message.focus();
                    return false;
                }
                   return true;
            }
    </script>
        <a href="sellerdashboard.php">Back</a>

        </form>
        </td>
        </tr>
        </table>

    </body>

    </html>


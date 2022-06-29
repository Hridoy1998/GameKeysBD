<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose role</title>
</head>
<body>
    <form action=""method="post" align ="center">
        <table border="1" align="center" height="300" width="300">
            <tr>
                <td>
                    <h2>Choose Your Role</h2>

                    <input type="radio" name="Role" value="b">Buyer 

                    <input type="radio" name="Role"value="s">Seller
                    <br><br>
                    <input type="submit" name="submit_role" value="Continue"><br>
                    <br>
                    <?php
                        if(isset($_POST["submit_role"])){
                            if(isset($_POST["Role"])){
                                $role= $_POST["Role"];

                                if($role == "b"){
                                    header("Location:../views/create_account_buyer.php");
                                }
                                else{
                                    header("Location:../views/create_account_seller.php");
                                }
                            }
                            else{
                                echo "INVALID!!! please Select a Role";
                            }
                           
                    }
                    ?>

                </td>
            </tr>
        </table>
        <table align="center">
            <tr>
                <td>
                    <a href="../views/Login.php">Back</a>
                </td>
            </tr>
        </table>
            
    </form>
    
      

</body>
</html>



<?php
session_start();
require('../model/users.php');
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
	    $password = $_POST['password'];

        if($username != null && $password != null)
        {
            $con = getConnection();
		    $sql = "select * from block_list where username='{$username}' and password='{$password}' ";
            $result=mysqli_query($con, $sql);
            $row= mysqli_fetch_assoc($result);
            if($result !== false && $result->num_rows > 0)
            {
                $msg="This Account is blocked....";
                echo ($msg);
                return false;

            }else{

            $con = getConnection();
		    $sql = "select * from user where username='{$username}' and password='{$password}' ";
            $result=mysqli_query($con, $sql);
            $row= mysqli_fetch_assoc($result);
            if($result !== false && $result->num_rows > 0)
            {
                if($row["type"]=="Buyer")
                {
                    $_SESSION['status'] = "true";
                    setcookie('status', 'true', time()+30000, '/');
                    $_SESSION['buyer_name']=$row['username'];
                    header('location: ../views/buyer_dashboard.php');
                }
                elseif($row["type"]=="Seller")
                {
                    $_SESSION['status'] = "true";
                    setcookie('status', 'true', time()+300, '/');
                    header('location: ../views/seller_dashboard.php');   
                }
                elseif($row["type"]=="Admin")
                {
                    $_SESSION['status'] = "true";
                    setcookie('status', 'true', time()+3000000, '/');
                    $_SESSION['name']=$row['first_name'];
                    $_SESSION['email']=$row['email'];
                    echo("login Successful..");
                    
    
                }
                else
                {
                    $msg="Incorect User name or password";
                    echo($msg);
                    return false;
                }
            }
            else
            {
                $msg="Incorect User name or password";
                echo($msg);
                return false;
            }
         }
        }
        else{
            echo"Null Submission";
            return false;
        }
    }
    else{
        echo"empty submit";
        return false;
    }

?>
<?php
session_start();
require('../model/users.php');
    if(isset($_POST['btn']))
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
                header("Location: ../views/Login.php?msg=".$msg);
                exit;

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
                    setcookie('status', 'true', time()+30000, '/');
                     $_SESSION['sellername']=$row['username'];
                    header('location: ../views/sellerdashboard.php');   
                }
                elseif($row["type"]=="Admin")
                {
                    $_SESSION['status'] = "true";
                    setcookie('status', 'true', time()+30000, '/');
                    $_SESSION['name']=$row['first_name'];
                    $msg="Log In successful..";
                    header('location: ../views/admin.php?msg='.$msg);
                    
    
                }
                else
                {
                    $msg="Incorect User name or password";
                    header("Location: ../views/Login.php?msg=".$msg);
                    exit;
                }
            }
            else
            {
                $msg="Incorect User name or password";
                header("Location: ../views/Login.php?msg=".$msg);
                exit;
            }
         }
        }
    }

?>
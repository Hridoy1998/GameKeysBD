<?php
require('../controllers/header.php');
require('../model/usersmodel.php');

if (isset($_REQUEST['submit'])) { {

        $id = $_REQUEST['id'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];


        if ($id != null && $username != null && $email != null && $password != null) {
            $status = updateUser($id, $username, $email, $password);
            if ($status) {
                header('location: ../views/seller_profile.php');
            } else {
                echo ("Something wrong... please try agin....!");
            }
        } else {
            echo "null submission ....";
        }
    }
} else {
    echo "something empty ....";
}
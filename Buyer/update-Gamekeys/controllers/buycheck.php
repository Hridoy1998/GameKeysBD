<?php

require('../controllers/header.php');
require('../model/usersmodel.php');
if (isset($_REQUEST['buy'])) {

    $game_name = $_SESSION['gamename'];
    $game_price = $_SESSION['gameprice'];
    $seller_name = $_SESSION['sellername'];
    $buyer_name = $_SESSION['buyer_name'];
    $quantity = $_POST['quantity'];
    $pay_method = $_POST['payment'];
    $current_date = date("Y-m-d H:i:s");

    $total = $game_price * $quantity;

    $status =  transaction($current_date, $buyer_name, $seller_name, $game_name, $quantity, $total, $pay_method);

    if ($status) {
        echo"Transaction complete";
    } 
    else{
        echo"Transaction not complete";
    }
}

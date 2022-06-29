<?php
function getConnection()
{
    $host = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'admin';
    $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    return $con;
}





function updateUser($id, $username, $email, $password)
{
    $conn = getConnection();
    $sql = "UPDATE user set username='{$username}',email='{$email}',password= '{$password}' where id='{$id}'";

    $row = mysqli_query($conn, $sql);
    if ($row) {

        return true;
    } else {
        return false;
    }
}

function Add_buyerpost($date, $name, $details,$buyer_name){		
    $con = getConnection();
    $sql = "insert into buyerpost (id, date, name, details,buyer) values('','{$date}','{$name}','{$details}','{$buyer_name}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}
function show_buyerpost(){		
    $con = getConnection();
    if($con){
        return true;
    }else{
        return false;
    }
}

function D_buyerpost($id){
    $con = getConnection();
    $sql = "DELETE FROM buyerpost WHERE id ='{$id}'";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function share_photo($date, $name, $des,$buyer_name){		
    $con = getConnection();
    $sql = "insert into photo (id, date, name, pic,buyer) values('','{$date}','{$name}','{$des}','{$buyer_name}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}



function show_photo(){		
    $con = getConnection();
    if($con){
        return true;
    }else{
        return false;
    }
}



function transaction($date, $buyer, $seller, $game_name, $quantity, $price, $pay_method)
{
    $con = getConnection();
    $sql = "INSERT INTO transactionap VALUES  ('','{$date}','{$buyer}', '{$seller}','{$game_name}','{$quantity}','{$price}','{$pay_method}')";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

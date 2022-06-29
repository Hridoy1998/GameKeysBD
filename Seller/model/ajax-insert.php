<?php

$name = $_POST["name"];
$price = $_POST["price"];

$conn = mysqli_connect("localhost","root","","admin") or die("Connection Failed");

$sql = "INSERT INTO products( name, price) VALUES ('{$name}','{$price}')";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}


?>

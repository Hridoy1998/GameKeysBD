<?php

$game_id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];

$conn = mysqli_connect("localhost","root","","admin") or die("Connection Failed");

$sql = "UPDATE products SET name = '{$name}',price = '{$price}' WHERE id =3";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>

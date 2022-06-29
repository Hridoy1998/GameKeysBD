<?php

$game_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","admin") or die("Connection Failed");

$sql = "DELETE FROM products WHERE id = 32";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>

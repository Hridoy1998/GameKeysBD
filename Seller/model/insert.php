<?php

$link = mysqli_connect("localhost", "root", "", "admin");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sender = mysqli_real_escape_string($link, $_REQUEST['sender']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
 

$sql = "INSERT INTO contacts (sender,username, email, message) VALUES ('$sender','$username', '$email', '$message')";
if(mysqli_query($link, $sql)){
    echo "Message sent successfully.";
} else{

     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>
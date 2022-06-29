<?php
require('../controllers/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../img/style.css">
<script src="../js/validation.js"></script>
    <title>search</title>
    
</head>
<style>
    body
    {
        background-color:#353b48;
    }
</style>
<body>

    <form action="../controllers/search_check.php" method="POST" align="center" >
    <h2>Search</h2>
        <table border="1" align="center" height="300" width="300">
        <tr>
        <td>
            <span id='e'></span>
        <img src="../img/search.gif" alt="" height="80" width="80"><br>
        <label for="">Search for</label><br><br>
        <label for="">select option</label>
              <select name="role" id="role">
                <option value=""></option>
                <option value="buyer">Buyer</option>
                <option value="seller">Seller</option>
                <option value="game">game</option>
              </select>
            <br><br>
        <input type="search" name="search" id='search' placeholder="Search" id="">
        <input type="button" value='SEARCH'name="btn"id ='submit' onclick="return serchv()"><br><br>

        <br>
        <a href="admin.php" >Back</a><br><br>
     
        </td>    
    </tr>    
    </table>
    
    </form>
    <div>
    <span id='e1'></span>
    </div>

   


</body>
</html>

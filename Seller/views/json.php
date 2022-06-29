
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaction</title>
    
</head>
<body>
    <h1 id="h1">Transaction History</h1>
<tr>
<?php

    
    $connection = mysqli_connect("localhost","root","","admin") or die("Error " . mysqli_error($connection));

   
    $sql = "select * from transaction";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $userarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $userarray[] = $row;
    }

    
    echo json_encode($userarray[3]);

    echo json_encode($userarray[5]);
    
    mysqli_close($connection);

?>
</body>
</html>
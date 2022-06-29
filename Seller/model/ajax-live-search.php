<html>
<body>
     <table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                
                <th style="color:cornsilk">Name</th>
                <th style="color:cornsilk">Price</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>

<?php

$search_value = $_POST["search"];

$conn = mysqli_connect("localhost","root","","admin") or die("Connection Failed");

$sql = "SELECT * FROM products WHERE name LIKE '%{$search_value}%' OR name LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
 
                $result = $conn->query($sql);
                if ($result->num_rows > 0) { 
                 
                    while ($row = $result->fetch_assoc()) { ?>

                        <tr>


                             

                             <td ><?= $row["name"] ?></td>

                             <td ><?= $row["price"] ?></td>
                             
                            <td align='center'><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["id"]}'>Delete</button></td>
                        </tr>

                <?php
                    }
                } else {
                    echo ("Something wrong... please try again....!");
                }
?>
</table>
</body>
</html>
<?php 
require('../controllers/header.php');
require('../model/admin.php');
if(isset($_POST['Appprove'])){

        $id= $_POST['id'];
        $con = getConnection();
		$sql = "SELECT * FROM transactionap where id='{$id}'";
		$result = $con->query($sql);
		if ($result !== false && $result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            $id=$row["id"];
            $date=$row["date"];
            $buyer=$row["buyer"];
            $seller=$row["seller"];
            $game_name=$row["game_name"];
            $quantity=$row["quantity"];
            $price=$row["price"];
            $pay_method=$row["pay_method"];

        }
    

		if($date != null &&$buyer != null &&$seller != null &&$game_name != null &&$quantity != null && $price != null && $pay_method != null){
		
            $status = transationAp($id,$date,$buyer, $seller,$game_name,$quantity,$price,$pay_method);
           if($status)
           {
                $status = transationRe($id);
                if($status){
                    echo("Transation Request Approve Successfully.");
                }
                else
                {
                    echo"Samething error......!!!";
                }
              
           }
           else
           {
               echo"Samething error......!!!";
           }

   }else{
       echo "null submission ....";
   }
}
else{
    echo"Not found";
}
}

?>
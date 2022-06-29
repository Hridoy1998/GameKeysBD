<?php 
require('../controllers/header.php');
require('../model/admin.php');
if(isset($_POST['DELETEb'])){

        $id= $_POST['id'];
            $status = BuyerGameReqD($id);
           if($status)
           {
              echo("Post Delete Successfully.");  
           }
           else
           {
               echo"Samething error......!!!";
           }

   }
else{
    echo"Submit not work";
}

?>
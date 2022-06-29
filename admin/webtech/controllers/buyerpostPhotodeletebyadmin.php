<?php 
require('../controllers/header.php');
require('../model/admin.php');
if(isset($_POST['DELETEb'])){

        $id= $_POST['id'];
            $status = BuyerpostD($id);
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
<?php 
require('../controllers/header.php');
require('../model/admin.php');
if(isset($_POST['Rejact'])){

        $id= $_POST['id'];
            $status = transationD($id);
           if($status)
           {
              echo("Transation Delete Successfully.");  
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
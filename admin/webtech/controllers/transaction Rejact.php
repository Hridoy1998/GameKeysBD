<?php 
require('../controllers/header.php');
require('../model/admin.php');
if(isset($_POST['Rejact'])){

        $id= $_POST['id'];
            $status = transationRe($id);
           if($status)
           {
              echo("Transation Request Rejact Successfully.");  
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
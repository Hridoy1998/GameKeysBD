<?php 
require('../controllers/header.php');
require('../model/admin.php');
if(isset($_POST['block'])){

        $id= $_POST['id'];

        $con = getConnection();
        $sql = "SELECT * FROM user where id='{$id}'";
        $result = $con->query($sql);
        if($result !== false && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $username = $row['username'];
            $dob = $row['DOB'];
            $gender = $row['gender'];
            $email = $row['email'];
            $phonenumber = $row['phone_number'];
            $password = $row['password'];
            $type = $row['type'];
            $des =$row['img'];

        }

		if($first_name != null &&$last_name != null &&$username != null &&$dob != null &&$gender != null &&$email != null && $phonenumber != null && $password != null){
		
            $status = block($id,$first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$type,$des);
           if($status)
           {
                $status = delete_user($id);
                if($status){
                    echo("block successfull...");
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
}

?>
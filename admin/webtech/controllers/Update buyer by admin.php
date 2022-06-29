<?php 
require('../controllers/header.php');
require('../model/admin.php');

if(isset($_POST['editBuyer'])){

        $data = $_POST['data'];
        $data = json_decode($data);

        $id = $data->id;
        $first_name = $data->first_name;
        $last_name = $data->last_name;
        $username = $data->username;
        $dob = $data->dob;
        $gender = $data->gender;
        $email = $data->email;
        $phonenumber = $data->phonenumber;
        $password = $data->password;
        $type = $data->type;


		$des = $_SESSION['pic'];

		if($id!=null&&$first_name != null &&$last_name != null &&$username != null &&$dob != null &&$gender != null &&$email != null && $phonenumber != null && $password != null)
        {
		
            $status = update_buyer($id,$first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$type,$des);
           if($status)
           {
            echo("Buyer Edit successfull.");
           }
           else
           {
               echo"Samething error......!!!";
           }

        }

   else{
       echo "null submission ....";
   }
    
}
else
{
	echo"something empty ....";
}

?>
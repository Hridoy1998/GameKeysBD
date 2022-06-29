<?php
if(isset($_POST['search'])){
		
    $username = $_POST['search'];

    if($username != null){
        
        /*if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];			
        }*/

        $file = fopen('../model/games.txt','r');

        while (!feof($file)) {
            $user = fgets($file);
            $userArray = explode("|", $user);

            if(trim($userArray[0]) == $username){
                $User =$username[0]."|".$username[1]."|".$username[2]."|".$username[3];
                $file = fopen('../model/game search by buyer.txt','w');
                fwrite($file, $user);
                header('location: ../views/searchinfo game by buyer.php');
                break;
            }
            else
            {
                echo "not found buyer";
            }
        }
        
        

    }else{
        echo "null submission ....";
    }
}
else{
    echo "null submission ....";
}
?>
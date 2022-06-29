<?php 

	function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'admin';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con; 
	}

	function Add_notices($date, $notice){		
		$con = getConnection();
		$sql = "insert into notices (id, date, notice) values('','{$date}','{$notice}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function show_notices(){		
		$con = getConnection();
		if($con){
			return true;
		}else{
			return false;
		}
	}
	function update_notices($id,$date, $notice){
		$con = getConnection();
		$sql = "update notices set id='{$id}',date='{$date}', notice='{$notice}' where id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}	
	}

	

	function D_notices($id){
		$con = getConnection();
		$sql = "DELETE FROM notices WHERE id ='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update_buyer($id,$first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$type,$des){
		$con = getConnection();
		$sql = "update user set first_name='{$first_name}', last_name='{$last_name}', username ='{$username}', DOB='{$dob}', gender='{$gender}', email='{$email}', phone_number='{$phonenumber}', password='{$password}', type='{$type}', img='{$des}' where id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}	
	}

	function update_seller($id,$first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$type,$des){
		$con = getConnection();
		$sql = "update user set first_name='{$first_name}', last_name='{$last_name}', username ='{$username}', DOB='{$dob}', gender='{$gender}', email='{$email}', phone_number='{$phonenumber}', password='{$password}', type='{$type}', img='{$des}' where id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}	
	}

	function block($id,$first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$type,$des){
		$con = getConnection();
		$sql = "INSERT into block_list (id, first_name, last_name, username, DOB, gender, email, phone_number, password, type, img) values ('','{$first_name}','{$last_name}','{$username}','{$dob}','{$gender}','{$email}','{$phonenumber}','{$password}', '{$type}','{$des}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}	
	}


	function delete_user($id){
		$con = getConnection();
		$sql = "DELETE FROM user  WHERE id ='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function unblock($id){
		$con = getConnection();
		$sql = "DELETE FROM block_list WHERE id ='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function add_user($first_name,$last_name, $username,$dob,$gender,$email,$phonenumber,$password,$type,$des){
		$con = getConnection();
		$sql = "INSERT INTO user VALUES  ('','{$first_name}','{$last_name}', '{$username}','{$dob}','{$gender}','{$email}','{$phonenumber}','{$password}','{$type}', '{$des}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function pic_up_admin($des){
		$con = getConnection();
		$sql = "UPDATE user set img='{$des}'where type='Admin'";
		if(mysqli_query($con, $sql)){
			return true;
	}else{
		return false;
	}	
	}

	function pic_up_buyer($des){
		$con = getConnection();
		$sql = "UPDATE user set img='{$des}'where type='Buyer'";
		if(mysqli_query($con, $sql)){
			return true;
	}else{
		return false;
	}	
	}

	function pic_up_seller($des){
		$$con = getConnection();
		$sql = "UPDATE user set img='{$des}'where type='Seller'";
		if(mysqli_query($con, $sql)){
			return true;
	}else{
		return false;
	}	
	}
	function blockcheck($email,$phonenumber){
		$con = getConnection();
		$sql = "select * from block_list where email='{$email}' or phone_number='{$phonenumber}'";
		$result=mysqli_query($con, $sql);
		if($result !== false && $result->num_rows > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function receck($email,$username)
	{
		$con = getConnection();
		$sql = "select * from user where type='Buyer' and email='{$email}' or username='{$username}'and type='Buyer'";
		$result=mysqli_query($con, $sql);
		if($result !== false && $result->num_rows > 0)
		{
			return true;
		}
		else{
			return false;
		}
	}
	function Add_message($receiver, $sender,$message,$current_date){
		$con = getConnection();
		$sql = "insert into mail (id, date, sender, receiver, message) values('','{$current_date}','{$sender}','{$receiver}','{$message}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function D_game($id){
		$con = getConnection();
		$sql = "DELETE FROM product WHERE id ='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function transationAp($id,$date,$buyer, $seller,$game_name,$quantity,$price,$pay_method){
		$con = getConnection();
		$sql = "INSERT INTO transaction VALUES  ('','{$date}','{$buyer}', '{$seller}','{$game_name}','{$quantity}','{$price}','{$pay_method}')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function transationRe($id){
		$con = getConnection();
		$sql = "DELETE FROM transactionap WHERE id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function transationD($id){
		$con = getConnection();
		$sql = "DELETE FROM transaction WHERE id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function BuyerpostD($id)
	{
		$con = getConnection();
		$sql = "DELETE FROM photo WHERE id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function BuyerGameReqD($id){
		$con = getConnection();
		$sql = "DELETE FROM buyerpost WHERE id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


?>
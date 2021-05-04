<?php
	$host 	= "127.0.0.1";
	$dbuser = "root";
	$dbpass	= "";
	$dbname	= "hospital";

	function dbConnection(){

		global $host;
		global $dbuser;
		global $dbpass;
		global $dbname;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}

   function getUsername($username){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select username from user where username like '%{$username}%'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		mysqli_close($conn);
		return $row;
	}

  function getEmail($email)
    {
        $conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select email from user where email='{$email}'";
		$result = mysqli_query($conn, $sql);
        $userEmail = mysqli_fetch_assoc($result);
        
        return $userEmail;
	}


	
	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
       
		$sql = "insert into user values('', '{$user['firstname']}', '{$user['lastname']}', '{$user['gender']}', '{$user['email']}', '{$user['username']}', '{$user['password']}', '{$user['rec_email']}', '{$user['user_type']}')";		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function getByName($username){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}


	function getPrescription($doctor_id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from prescription where doctor_id='{$doctor_id}'";
		$result = mysqli_query($conn, $sql);
		$prescription = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($prescription, $row);
		}

		return $prescription;
	}

	//Doctor Prescription
	function prescription_insert($prescription){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into prescription values('', '{$prescription['doctor_id']}', '{$prescription['patient_id']}', '{$prescription['p_description']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function prescription_update($prescription){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update prescription set doctor_id='{$prescription['doctor_id']}', patient_id='{$prescription['patient_id']}', p_description='{$prescription['p_description']}' where p_id='{$prescription['p_id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function prescriptionDelete($p_id){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
	
		$sql = "delete from  prescription where p_id={$p_id}";
	
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function getByP_id($p_id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from prescription where p_id={$p_id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
   ?>
<?php
	
	require_once('session_header.php');
	require_once('druser.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('location: ../drlogin.php?error=null_value');
		}else{

			$user = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($user);
			$as = getByName($username);
			$abc = $as['user_type'];
			//echo $status['username'];
			if($status){
				$_SESSION['username'] = $username;
				$_SESSION['userid'] = $as['id'];

			if($abc=='Doctor')
				
				header('location: ../profiledetails.php');
			}
				
			else{
				
				header('location: ../drlogin.php?error=invalid_user');
			}
		}
	}



?>
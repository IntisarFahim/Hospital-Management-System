<?php 
	require_once('druser.php');
	if(isset($_POST['check_email']))
    {
        $email= $_POST['emailId'];
        if(isset($email))
        {
            $getemail = getEmail($email);
            if(!empty($getemail))
            {
                echo "   *email already exists!";
            }

            else
            {
                echo "";
            }
        }
    }

	if(isset($_POST['check_user']))
    {
        $uname= $_POST['userName'];
        if(isset($uname))
        {
            $getuname = getUsername($uname);
            if(!empty($getuname))
            {
                echo "    *username already exists!";
            }

            else
            {
                echo "";
            }
        }
    }


	if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$username 	= $_POST['username'];
		$gender = $_POST['gender'];
		$password 	= $_POST['password'];
		$remail = $_POST['remail'];
		$user_type = $_POST['user_type'];
		$valid = FALSE;
		$exist_email= getEmail($email);
		$exist_username= getUsername($username);
		//echo "$exist_username['username']";
		
		if(empty($fname) || empty($lname) || empty($email) || empty($username) || empty($gender)  || empty($password) || empty($remail) || empty($user_type)){
			
			header('location: ../drreg.php?error=null_value');
		}
		elseif(strlen($password)<6 || strlen($password)>10)
		{
			echo "Password should be between 6 to 10 !!!";
			header('location: ../drreg.php?error=6 to 8');
		}

		elseif (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
			echo "Only letters and white space allowed";
			header('location: ../drreg.php?error=character allowed');
		  }
		  elseif (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
			echo "Only letters and white space allowed";
			header('location: ../drreg.php?error=null_value');
		  }

		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo"Invalid email format";
			header('location: ../drreg.php?error=null_value');
		  }
		  elseif (!filter_var($remail, FILTER_VALIDATE_EMAIL)) {
			echo"Invalid email format";
			header('location: ../drreg.php?error=Invalid email format');
		  }


		elseif($email==$exist_email['email'])
		{
			echo "email already exist";
			header('location: ../drreg.php?error=email exist');
		}

		elseif($username==$exist_username['username'])
		{
			echo "Username already exist";
			header('location: ../drreg.php?error=user name exist');
		}
		
		else{
			$user = [
				'firstname' => $fname,
				'lastname' => $lname,
				'email' => $email,
				'username'=> $username,
				'gender'=>$gender,
				'password'=> $password,
				'rec_email'=> $remail,
				'user_type'=> $user_type
			];

			$status = insert($user);

			if($status){
				header('location: ../drlogin.php?success=registration_done');
			}else{
				header('location: ../drreg.php?error=db_error');
			}
		}
	}



?>
<!DOCTYPE html>
<html>
     <body>

     <?php

           $newusername= $newpassword = $conpassword =$emptynewusername= $emptynewpassword = $emptyconpassword = "";
        

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['emptynewusername'])) {
                      $emptynewusername = "Please Fill New Username!";
                }

                else if(empty($_POST['emptynewpassword'])) { 
                    $emptynewpassword = "Please Fill up New Password!";
                    
                }

                else if(empty($_POST['emptyconpassword'])) {   
                    $emptyconpassword= "Please Confirm New Password!";
                    
                }


                else{

              
                    $newusername = $_POST['newusername'];
                    $newpassword = $_POST['newpassword'];

                    $log_file = fopen("Login.txt", "a");
                    
                    $data = fread($log_file, filesize("Login.txt"));
                    
                    fclose($log_file);
                    
                    $data_filter = explode("\n", $data);

                   
                    $usertable = array('username' => $newusername, 'password' => $newpassword);
                    $usertable_encoded = json_encode($usertable);

                    $log_filepath = "Login.txt";

                    $log_file = fopen($log_filepath, "a");
                    echo fwrite($log_file, $usertable_encoded . "\n");	
                    fclose($log_file);

                  header('Location:DoctorLogin.php');

                }
         } 

                ?>


    <h1 style="background-color:DodgerBlue;">Recover Password </h1>
    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

            <fieldset>
              <legend><h2 style="background-color:Violet;">Recover Password</h2></legend>   


              <label for="username">Username:</label>
                <input type="text" name="newusername" id="username">
                <?php echo $emptynewusername; ?>
                

                <br>
              <label for="password">New Password   :</label>
                <input type="password" name="newpassword" id="password">
                <?php echo $emptynewpassword; ?>
              
                <br>


                <label for="conpassword">Confirm New Password :</label>
                <input type="password" name="conpassword" id="password">
                <?php echo $emptyconpassword; ?>
                

                </fieldset>

              <input type="submit" value="confirm" name="button" button style="margin:20px;">

              </form>

        
        
    </body>
</html>
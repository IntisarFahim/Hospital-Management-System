<!DOCTYPE html>
<html>
    <body>
        <?php

            $username = $password ="";
            $emptyusername = $emptypassword ="";

            if($_SERVER['REQUEST_METHOD'] == "POST" && $_REQUEST['button'] == "Login") {

                if(empty($_POST['uname'])) {                    
                    $emptyusername = "Please Fill up the Username!";
                }

                else if(empty($_POST['password'])) {                    
                    $emptypassword = "Please Fill up the password!";
                }

                else {
                    $username = $_POST['uname'];
                    $password = $_POST['password'];
                    $conn2 = mysqli_connect( $username, $password);
    if(mysqli_connect_error()) {
        echo "2. Database Connection Failed!...";
        echo "<br>";
        echo mysqli_connect_error();
    }
    else {
        echo "2. Database Connection Successful!";
    }

    mysqli_close($conn2);

                    

        ?>
        
        <h1 style="background-color:DodgerBlue;">pharmacy Login </h1>
        <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

            <fieldset>
              <legend><h2 style="background-color:Violet;">Login</h2></legend>
            
                <label for="username">Username:</label>
                <input type="text" name="uname" id="username">
                <?php echo $emptyusername; ?>

                <br>

                <label for="parmanent_address">Password:</label>
                <input type="password" name="password" id="password">
                <?php echo $emptypassword; ?>
                
                </fieldset>

            <input type="submit" value="Login" name="button">
            
            <br>

            <input type="submit" value="Sign Up" name="button"> 
        </form>
        
    </body>
</html>
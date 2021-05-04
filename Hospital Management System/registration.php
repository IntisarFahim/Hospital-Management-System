<!DOCTYPE html>
<html>
    
    <body>
        <?php

            $name = $gender = $dob = $religion = $fname = $mname = $presentadress = $permanentaddress = $website = $sscyear= $sscinstitution = $hscyear = $hscinstitution =  $email = $phone =  $username = $password = $rec_email ="";

             $emptyname = $emptygender = $emptydob = $emptyreligion = $emptyfname = $emptymname = $emptypresentadress = $emptypermanentaddress = $emptywebsite =  $emptysscyear =     $emptysscinstitution = $emptyhscyear = $emptyhscinstitution = $emptyemail = $emptyphone = $emptyusername = $emptypassword = $emptyrec_email = $notavailable ="";



            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['name'])) {
                      $emptyname = "Please Fill up the firstname!";
                }

                else if(empty($_POST['gender'])) { 
                    $emptygender = "Please Fill up the gender!";
                    
                }

                else if(empty($_POST['dob'])) {   
                    $emptydob= "Please Fill up the dob!";
                    
                }

                else if(empty($_POST['religion'])) {
                   $religion = "Please Fill up the religion!";
                    
                }

                else if(empty($_POST['fname'])) {
                  $emptyfname = "Please Fill up the Father's Name!";
                }

                else if(empty($_POST['mname'])) {
                  $mname = "Please Fill up the Mother's name!";
                }

                else if(empty($_POST['presentadress'])) {
                   $presentadress = "Please Fill up the Present Adress!";
                }

                else if(empty($_POST['permanentaddress'])) {
                      $emptyparmanentaddress = "Please Fill up the Permanent Adress!";
                    
                }

                else if(empty($_POST['website'])) {
                    $emptywebsite= "Please Fill up the Website!";
                    
                }

                
                else if(empty($_POST['sscyear'])) {
                  $emptysscyear  = "Please Fill up the SSC Year!";
                }

                else if(empty($_POST['sscinstitution'])) {
                  $emptysscinstitution = "Please Fill up the SSC Institution!";
                }

                else if(empty($_POST['hscyear'])) {
                  $emptyhscyear  = "Please Fill up the HSC Year!";
                }

                else if(empty($_POST['hscinstitution'])) {                    
                  $emptyhscinstitution = "Please Fill up the HSC Institution!";

                }

                else if(empty($_POST['email'])) {                    
                   $emptyemail = "Please Fill up the Email!";
                    
                }

                else if(empty($_POST['phone'])) {                    
                 $emptyphone = "Please Fill up the Phone!";

                }


                 else if(empty($_POST['uname'])) {                    
                   $emptyusername  = "Please Fill up the username!";
                }


                else if(empty($_POST['pass'])) {                    
                   $emptypassword = "Please Fill up the password!";
                }

                else if(empty($_POST['rec_email'])) {                    
                   $emptyrec_email = "Please Fill up the recovery email!";
                }

                else {
                  

                  
                    $name = $_POST['name'];
                    $gender = $_POST['gender'];
                    $dob = $_POST['dob'];
                    $religion = $_POST['religion'];
                    $fname =  $_POST['fname'];
                    $mname = $_POST['mname'];
                    $presentadress = $_POST['presentadress'];
                    $permanentaddress = $_POST['permanentaddress'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $website =  $_POST['website'];
                    $sscyear = $_POST['sscyear'];
                    $sscinstitution = $_POST['sscinstitution'];
                    $hscyear = $_POST['hscyear'];
                    $hscinstitution = $_POST['hscinstitution'];
                    $username = $_POST['uname'];
                    $password = $_POST['pass'];
                    $rec_email = $_POST['rec_email'];



                   $conn2 = mysqli_connect($name, $gender, $dob,$religion,$fname,$mname,$presentadress,$permanentaddress,$email,$phone,$website,$sscyear,$sscinstitution,$hscyear,$hscinstitution,$username,$password,$rec_email);
                  if(mysqli_connect_error()) {
                  echo "2. Database Connection Failed!...";
                  echo "<br>";
                  echo mysqli_connect_error();
                  }
                 else {
                  echo "2. Database Connection Successful!";
                  }

                 mysqli_close($conn2);




        

                   
                            
                        
                    }
            }
        ?>



        <h1 style="background-color:DodgerBlue;">pharmacy Registration Form</h1>
        <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">






            <fieldset>

               <legend><h2 style="background-color:Violet;">Personal Information</h2></legend>

                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <?php echo $emptyname; ?>

                <br>

                <label for="gender">Gender:  </label>
                <input type="radio" name="gender" id="male" value="male">  
                <label for="gender">Male </label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="gender">Female </label>
                <input type="radio" name="gender" id="other" value="other">
                <label for="gender">Other </label>
                <?php echo $emptygender; ?>


              <br>

       
                <label for="dob">DoB:</label>

                <input type="date" id="dob" name="dob"

                value="2018-07-22"
                 min="1990-01-01" max="2021-02-15">
                 <?php echo $emptydob; ?>


        
                <br>

              <label for="religion">Religion:</label>

              <select name="religion" id="religion">
              <option value="islam">Islam</option>
              <option value="hinduism">Hinduism</option>
              <option value="buddhism">Buddhism</option>
              <option value="christianity">Christianity</option>
              </select>

              <?php echo $emptyreligion; ?>


              <br>


              <label for="fname">Father's Name:</label>
              <input type="text" id="fname" name="fname">

              <?php echo $emptyfname; ?>


              <br>
        
              <label for="mname">Mother's Name:</label>
              <input type="text" id="mname" name="mname">

              <?php echo $emptymname; ?>


              <br>

            </fieldset>





             <fieldset>

      
            <legend><h2 style="background-color:Violet;">Contact Information</h2></legend>

            <label for="presentadress">Present adress:</label>
            <input type="text" id="presentadress" name="presentadress">

            <?php echo $emptypresentadress; ?>


            <br>
        
            <label for="permanentadress">Permanent adresse:</label>
            <input type="text" id="permanentadress" name="permanentaddress">

            <?php echo $emptypermanentaddress; ?>


            <br>



            <label for="phone">Enter your phone number:</label>
            <input type="tel" id="phone" name="phone">


            <br>

            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email">

            <?php echo $emptyemail; ?>


           <br>

           <label for="website">Enter your personal website link:</label>
           <input type="url" id="website" name="website">

           <?php echo $emptywebsite; ?>


           <br>


          </fieldset>


          <fieldset>

           <legend> <h2 style="background-color:Violet;">Academic Information</h2></legend>

               
    
           <label for="sscyear">Pssing year of SSC:</label>
           <input type="number" id="sscyear" name="sscyear" min="2000" max="2021">

           <?php echo $emptysscyear; ?>


           <br>

           <label for="sscinstitution">Institution (SSC) :</label>
           <input type="text" id="sscinstitution" name="sscinstitution">

           <?php echo $emptysscinstitution; ?>


          

           <br>


           <label for="hscyear">Passing year of HSC:</label>
           <input type="number" id="hscyear" name="hscyear" min="2000" max="2021">

           <?php echo $emptyhscyear; ?>

    
          

           <br>


           <label for="hscinstitution">Institution (HSC) :</label>
           <input type="text" id="hscinstitution" name="hscinstitution">

           <?php echo $emptyhscinstitution; ?>


         
 
           <br>
                
                </fieldset>



               <fieldset>
                    
             <legend> <h2 style="background-color:Violet;">LogIn Information</h2></legend>

                <label for="username">Username:</label>
                <input type="text" name="uname" id="username">
                <?php echo $emptyusername; echo $notavailable; ?>

                <?php echo $emptyusername; ?>


                <br>

                <label for="password">Password:</label>
                <input type="password" name="pass" id="password">
                <?php echo $emptypassword; ?>

                <br>

                <label for="rec_email">Recovery email:</label>
                <input type="email" id="rec_email" name="rec_email">
                <?php echo $emptyrec_email; ?>
                
                </fieldset>

            <input type="submit" value="Register" > 
        </form>
        
    </body>
</html>



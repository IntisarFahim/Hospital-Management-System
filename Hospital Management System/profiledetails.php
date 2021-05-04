<?php
	require_once('php/session_header.php');
	require_once('php/druser.php');
	$userinfo = getByName($_SESSION['username']);
	//echo $userinfo['name'];

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/profiledetails.css">
</head>
    
    <body>  
    <div class="body"> 
    <div class="top">Hospital Management System </div>
          <div class="pro_view">
               <legend><h1 >DOCTOR'S PROFILE</h1></legend>
            
                <label for="fname">First Name:
                <?php echo $userinfo['firstname']; ?></label>

                <br>

                <label for="lname">Last Name:
                <?php echo $userinfo['lastname']; ?></label>

                <br>

                <label for="email">Email:
                <?php echo $userinfo['email']; ?></label>

                <br>

                <label for="email">User Name:
                <?php echo $userinfo['username']; ?></label>

           


            <br>

            <br>


             <input type="submit" value="Appointment List" name="button"> 

             <br>

             <button><a href="digitalprescription.php">Digital Prescription</a> </button>

             </div>
      
        </form>
        </div>
        
    </body>
</html>



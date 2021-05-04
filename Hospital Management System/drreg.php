<!DOCTYPE html>
<html>
    
  <body> 
    
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <title>Document</title>
  </head>

  <title>Document</title>
  </head>
  <body>
  <script type="text/javascript" src="JS/register.js"></script>
    <header class="header-area">
      <div class="title">
        <h1>Hospital Management System</h1>
      </div>

      <div class="navigation">
        <nav class="menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#About">About Us</a></li>
            <li><a href="#Service">Service</a></li>
            <li><a href="#Contact">Contact Us</a></li>
            <li>
              <a href="loginAsA.php">Login</a>
              </li>
          </ul>
        </nav>
      </div>
    </header>
  

    <div class="banner-area">
      <div class="canvas">
      
      <div class="title">
        
      <h1 style="background-color:DodgerBlue;">Doctor Registration Form</h1>
        <form  action="php/reg.php" onsubmit=return validation() method="post">

            <fieldset>
               <legend><h2 style="background-color:Violet;">Basic Information</h2></legend>

                <label for="firstname">First Name:</label>
                <input class="center-block" type="text" name="fname" id="firstname" onkeyup="FnameRemover()" onblur="FnameEmpty()">
                <label> <i id="fnameMsg" style="color:red; font-size: 15px;"></i></label>
             

                <br>

                <label for="lastname"> LastName:</label>
                <input class="center-block" type="text" name="lname" id="lastname" onkeyup="LnameRemover()" onblur="LnameEmpty()">
                <label> <i id="lnameMsg" style="color:red; font-size: 15px;"></i></label>
                

                <br>

                <label for="gender">Gender:  </label>
                <input type="radio" name="gender" id="male" value="male" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">  
                <label for="gender">Male </label>
                <input type="radio" name="gender" id="female" value="female" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">
                <label for="gender">Female </label>
                <input type="radio" name="gender" id="other" value="other" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">
                <label for="gender">Other </label>
                <label> <i id="genderMsg" style="color:red; font-size: 15px;"></i></label>
               

                <br>

                <label for="email">Email:</label>
                <input class="center-block" type="email" placeholder="example@gmail.com" id="email" name="email" onkeyup="emailRemover()" onblur="emailEmpty()">
                <label> <i id="emailMsg" style="color:red; font-size: 15px;"></i></label>

                <br>
                <label for="user_type">User Type</label>
                <select name="user_type" id="usertype" onkeyup="uTRemover()" onblur="usertypeEmpty()" onclick="uTRemover()">
			      	 <option name="user_type" value=""></option>
				       <option name="user_type" value="Doctor">Doctor</option>
				       <option name="user_type" value="Admin">Admin</option>
				       <option name="user_type" value="Patient">Patient</option>
               <option name="user_type" value="Receiptionist">Receiptionist</option>
               <label> <i id="utMsg" style="color:red; font-size: 15px;"></i></label>
				       </select >
               
                

            </fieldset>

            <fieldset>
             <legend> <h2 style="background-color:Violet;">Account Information</h2></legend>

                <label for="username">Username:</label>
                <input class="center-block" type="text" name="username" id="username" onkeyup="unameRemover()" onblur="unameEmpty()">
                <label> <i id="usernameMsg" style="color:red; font-size: 15px;"></i></label>
                

                <br>

                <label for="parmanent_address">Password:</label>
                <input class="center-block" type="password" name="password" id="password" onkeyup="pRemover()" onblur="PEmpty()">
                <label> <i id="passMsg" style="color:red; font-size: 15px;"></i></label>
                

                <br>

                <label for="rec_email">Recovery email:</label>
                <input class="center-block" type="email" id="remail" name="remail" onkeyup="Rec_emailRemover()" onblur="Rec_emailEmpty()">
                <label> <i id="remailMsg" style="color:red; font-size: 15px;"></i></label>

             
             
                
                
                </fieldset>

                <input class="center-block" type="submit" value="Sign Up" name="submit" button style="margin:20px;">
        </form>
 </div>
      </div>


    <div class="footer">
      <div class="container">
        <div class="footer-about col16">
          <h3>Us</h3>
          <li><a href="">Careers</a></li>
          <li><a href="">Team</a></li>
          <li><a href="">Work</a></li>
        </div>
        <div class="contact col16">
          <h3>Contact</h3>
          <li><a href="">www.hospital.com</a></li>
          <li><a href="">555-666-888</a></li>
          <li><a href="">Dhaka,Bangladesh</a></li>
        </div>
        <div class="social col16">
          <h3>Social</h3>
          <li><a href="">Facebook</a></li>
          <li><a href="">Twitter</a></li>
          <li><a href="">Instagram</a></li>
        </div>
        <div class="newsletter col30">
          <h2>join Us!</h2>
          <div class="input">
            <input type="text" />
          </div>
          <div class="search">
            <a href="">Subscribe</a>

            </div>
        </div>
      </div>
    </div>
  </body>
</html>
          











  



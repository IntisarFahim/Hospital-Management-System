<!DOCTYPE html>
<html>
    <body>
    <!DOCTYPE html>

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
  <script type="text/javascript" src="JS/login.js"></script>
    <header class="header-area">
      <div class="title">
        <h1>Hospital Management System</h1>
      </div>

      <div class="navigation">
        <nav class="menu">
          <ul>
            <li><a href="Home.html">Home</a></li>
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
      <div class="title3">


      <h1 style="background-color:DodgerBlue;">Doctor Login </h1>
      <form  action="php/logCheck.php" method="post">

<fieldset>
  <legend><h2 style="background-color:Violet;">Login</h2></legend>

    <label for="username">Username:</label>
    <input type="text" name="username" id="username" onkeyup="userRemover()" onblur="userEmpty()">
    <label> <i id="userMsg" style="color:red; font-size: 15px;"></i></label>
    

    <br>

    <label for="parmanent_address">Password:</label>
    <input type="password" name="password" id="password" onkeyup="pRemover()" onblur="passwordEmpty()">
    <label> <i id="passMsg" style="color:red; font-size: 15px;"></i></label>
    
    </fieldset>

<input type="submit" value="Login" name="submit">
<a href="drreg.php">Sign up</a> |
</form>



        
        <a href="recover.php"><button> Forgot Password</button></a>
     
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

<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Movie Pool</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="signup.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<header>
	<nav class="navbar navbar-fixed-top">
	  <div class="container-fluid">
	  	<div class="navbar-header">
		  	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      	</button>
	  		<a class="navbar-brand" href="index.html">Movie Pool</a>
	  	</div>
	  <div class="collapse navbar-collapse" id="myNavbar">
	  	<ul class="nav navbar-nav">
	  		<li><a href="ride.html">Find A Ride</a></li>
	  		<li><a href="drive.html">Become A Driver</a></li>
	  		<li><a href="contact.html">Contact Us</a></li>
	  	</ul>
	  	<ul class="nav navbar-nav navbar-right">
	  		<li id="right-nav"><a href="account.html">Login</a></li>
	  	</ul>
	  </div>
	</div>
  </nav>
</header>
<body>
  <div class="container">
  	<div class="page-header">
	  <div class="row">
		  <div class="col-sm-12">
		  	<div class="page-header-text">
		  		<h2>Sign Up</h2>
		  	</div>
		  </div>
	  </div>
	 </div>
  </div>
  <div class="container">
	  <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <div class="form-group">
            <label for="first"><b>First Name</b></label>
            <input type="text" class="form-control" id="first" placeholder="Please enter your first name" name="first" required>
            </div>

            <div class="form-group">
            <label for="last"><b>Last Name</b></label>
            <input type="text" class="form-control" id="last" placeholder="Please enter your last name" name="last" required>
            </div>

		  <div class="form-group">
			<label for="email"><b>Email</b></label>
		  <input type="email" class="form-control" id="email" placeholder="Please enter your email" name="email" required>
            </div>

		    <div class="form-group">
            <label for="username"><b>Username</b></label>
            <input type="text" class="form-control" id="username" placeholder="Please enter your favorite username" name="username" required>
        </div>

        <div class="form-group">
        <label for="password"><b>Password</b></label>
        <input type="password" class="form-control" id="password" placeholder="Please enter your password" name="password" required>
        </div>


		  <div class="form-group">
		  	<label for="message"><b>Confirm Password</b></label>
			<input type="password" class="form-control" id="repeat" placeholder="Please enter your password again" name="repeatpassword" required>
        </div>

            <button type="submit" class="signupbt" name="sub">Sign Up</button>
            <input type="checkbox" checked="checked"> Remember me

          	<div class="privacy-text">
          	<p>   By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          	</div> 
          </div>         
	  </form>
  </div>
<footer class="footer">
	<div class="container">
	<div class="row">
		<div class="col-md-8">
		<span class="pull-left">
			<p>MoviePool &copy; 2017</p>
		</span>
		</div>
		<div class="icons">
			<div class="col-md-4">
			<span class="pull-right">
			<a href="#"><img src="img/social/facebook.png" alt="Facebook"></a>
	      	<a href="#"><img src="img/social/twitter.png" alt="Twitter"></a>
	      	<a href="#"><img src="img/social/instagram.png" alt="Instagram"></a>
	      	<a href="#"><img src="img/social/mail.png" alt="Email"></a>
 			<a href="https://github.com/Polarpi/pyghack" target="_blank"><img src="img/social/github.png" alt="Github"></a>
 			</span>
	      	</div>
		</div>
	</div>
	</div>
</footer>
</html>


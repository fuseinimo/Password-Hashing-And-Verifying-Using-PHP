<?php

   include('signup/signupValidation.php');
   include('login/login.php');



?>
<!DOCTYPE html>
<html>
<head>
	<title>Hash and Verify Password</title>
	<style type="text/css">
	</style>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/jquery/jquery-3.2.1.min.js">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
<body>

	  <div class="container">
	  	 
           <div class="row">
           	  <div class="col-sm-6 my-5">
           	  	<h3 class="text-center">Sign Up</h3>
           	  	<form class="form" method="post">

                <?php   
                          
                          if (isset($_POST['signup'])) {
                            
                                 echo "<h4 class='text'>".$output."</h4>";
                          }

                  ?>
                  <h5 class="text"></h5>
                     <div class="form-group">
           	  		<label class="label">Username</label>
           	  		<input type="text" name="uname" class="form-control" required="true">
           	  	     </div>
           	  	     <div class="form-group">
           	  		<label class="label">Email</label>
           	  		<input type="email" name="email" class="form-control" required="true">
           	  	     </div>
           	  	     <div class="form-group">
           	  		<label class="label">Password</label>
           	  		<input type="Password" name="password" class="form-control" required="true">
           	  	     </div>
           	  	     <input type="submit" name="signup" value="submit" class="btn btn-primary">
           	  	</form>
           	  </div>
           	   <div class="col-sm-6 my-5" id="b4">
           	  	<h3 class="text-center">Log In</h3>
           	  	<form class="form" method="post">

                    <?php

                            if (isset($_POST['login'])) {
                              
                                  echo "<h5 class='text'>".$outputLogin."</h5>";
                            }

                    ?>
           	  	     <div class="form-group">
           	  		<label class="label">Email</label>
           	  		<input type="email" name="email" class="form-control" required>
           	  	     </div>
           	  	     <div class="form-group">
           	  		<label class="label">Password</label>
           	  		<input type="Password" name="password" class="form-control" required>
           	  	     </div>
           	  	     <input type="submit" name="login" value="submit" class="btn btn-primary">
           	  	</form>
           	  </div>
           </div>

	  </div>

</body>
</html>
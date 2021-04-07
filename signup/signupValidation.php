<?php

    $conns = mysqli_connect('localhost','root','','hash_password');

       global $output;
       $output = "";

       if (isset($_POST['signup'])) {

       	   $username = $_POST['uname'];
       	   $email = $_POST['email'];
       	   $password = $_POST['password'];

       	   $hash_pass = password_hash($password, PASSWORD_DEFAULT);

       	   $sqlCheck = "SELECT * FROM hash_password_table WHERE email = '$email' ";

       	   $queryCheck = mysqli_query($conns,$sqlCheck);

       	       if (mysqli_num_rows($queryCheck) == 1) {
       	       	# code...
       	       	$output = "email exist already";
       	       }else{

       	       	     $sql = "INSERT INTO hash_password_table(username,email,password) VALUES('$username','$email','$hash_pass')";
       	             $query = mysqli_query($conns,$sql);

       	             if ($query) {
       	     
       	              $output = "Successfully signed up";

       	             }else $output = "failed to sign up";
       	       }

       	    
       	
       	   
       }







?>
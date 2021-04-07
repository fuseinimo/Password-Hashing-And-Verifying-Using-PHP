

<?php

          $conn = mysqli_connect('localhost','root','','hash_password');

                global $outputLogin;
                $outputLogin = "";

              if (isset($_POST['login'])) {
              	
              	   $emailLogin = $_POST['email'];
              	   $passwordLogin = $_POST['password'];

              	   $sqlLogin = "SELECT password FROM hash_password_table WHERE email = '$emailLogin' ";

              	   $queryLogin = mysqli_query($conn,$sqlLogin);

              	   $rowPassword = mysqli_fetch_array($queryLogin);

              	    if (password_verify($passwordLogin,$rowPassword['password'])) {
              	    	
              	    	  $outputLogin = "Login successfully";
              	    }else{

              	    	  $outputLogin = "Invalid login";
              	    }



                    
              }













?>
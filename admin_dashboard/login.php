<?php

session_start();

if(!empty($_SESSION['username'])) {
   
   header("location:index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="../images/icons8-silent-filled-50.png" type="image/png"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
   <?php
require('../sql/config.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
   {
$username= $_POST['email'];
$password= $_POST['password'];


$query = "SELECT * from `reveal_admin` WHERE `email` = '".$username."' AND `pass` ='".$password."'  ";
       
     
      if ($result=$dbConn->query($query)) {
      
         if($result->num_rows>0)  

      {

         $row = $result->fetch_assoc();
          
         
          $_SESSION['email'] = $row['email'];
        
          $_SESSION['pass'] = $row['password'];
           header("Location:index.php"); 
      }
      else
      {

         echo "Username/Password is incorrect";
      }

 }
 else "query unsucessful". $dbConn->error;
}
?>



  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" action="#">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" name="email" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" name="submit" href="#">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

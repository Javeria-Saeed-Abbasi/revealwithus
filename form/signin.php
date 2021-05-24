<?php

session_start();

if(!empty($_SESSION['username'])) {
   
   header("location:../user_timeline/myprofile.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../images/icons8-silent-filled-50.png" type="image/png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" rel="stylesheet"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
          <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    

<style>
   
   body{
        padding-top:4.2rem;
		padding-bottom:4.2rem;
         background:rgb(0, 0, 0); 
        }
		.container{
			background-image:url(../images/bg1.jpg);
			background-repeat:no-repeat;
			background-size:cover;
            height: 500px;
        }
            
        a{
         text-decoration:none !important;
         }
         h1,h2,h3{
         font-family: 'Kaushan Script', cursive;
         }
          .myform{
		position: relative;
		display: -ms-flexbox;
		display: flex;
		padding: 1rem;
        -ms-flex-direction: column;
		flex-direction: column;
		width: 100%;
		pointer-events: auto;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid rgba(0,0,0,.2);
		border-radius: 1.1rem;
		outline: 0;
		max-width: 500px;
		
		 }
         .tx-tfm{
         text-transform:uppercase;
         }
         .mybtn{
         border-radius:50px;
         }
        
         .login-or {
         position: relative;
         color: #aaa;
         margin-top: 10px;
         margin-bottom: 10px;
         padding-top: 10px;
         padding-bottom: 10px;
         }
         .span-or {
         display: block;
         position: absolute;
         left: 50%;
         top: -2px;
         margin-left: -25px;
         background-color: #fff;
         width: 50px;
         text-align: center;
         }
         .hr-or {
         height: 1px;
         margin-top: 0px !important;
         margin-bottom: 0px !important;
         }
         .google {
         color:#666;
         width:100%;
         height:40px;
         text-align:center;
         outline:none;
         border: 1px solid lightgrey;
         }
          form .error {
         color: #ff0000;
         }
         #second{display:none;}
    

</style>
</head>
<body style="background-image:url(../images/bg1.jpg) no-repeat  ;">
  <?php 
require('../sql/config.php');

   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
$username= $_POST['email'];
$password= md5($_POST ['password']);


$query = "SELECT * from `admin_login` WHERE `username` = '".$username."' AND `password` ='".$password."'  ";

     
      if ($result=$dbConn->query($query)) {
         if($result->num_rows>0)  

      {
         $_SESSION['username'] = $username;
         $_SESSION['userid'] = $result['userid'];
         header("Location:../admin dashboard/index.html"); 
      }
      else
      {
         echo "Username/Password is incorrect";
      }

 }
 else "query unsucessful". $dbConn->error;
}
?>


<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!-- FOR USER SIGN IN -->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
   {
$username= $_POST['email'];
$password=$_POST['password'];


$query = "SELECT * from `admin_login` WHERE `email` = '".$username."' AND `passw` ='".$password."'  ";
       
     
      if ($result=$dbConn->query($query)) {
      
         if($result->num_rows>0)  

      {

         $row = $result->fetch_assoc();
          
         
          $_SESSION['username'] = $row['firstname'];
        
          $_SESSION['userid'] = $row['userid'];
           header("Location:../index.php"); 
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
                <div class="row">
        			<div class="col-md-5 mx-auto">
        			<div id="first">
        				<div class="myform form">
        					 <div class="logo mb-3">
        						 <div class="col-md-12 text-center">
        							<h1>Login</h1>
        						 </div>
        					</div>
                           <form action="signin.php" method="POST" name="login">
                                   <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                   </div>
                                   <div class="form-group">
                                      <label for="exampleInputEmail1">Password</label>
                                      <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                                   </div>
                                   <div class="form-group">
                                      <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                                   </div>
                                   <div class="col-md-12 text-center ">
                                      <button type="submit" class=" btn btn-block mybtn btn-danger tx-tfm">Login</button>
                                   </div>
                                   <div class="col-md-12 ">
                                      <div class="login-or">
                                         <hr class="hr-or">
                                         <span class="span-or">or</span>
                                      </div>
                                   </div>
                                   <!-- <div class="col-md-12 mb-3">
                                      <p class="text-center">
                                         <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                         </i> Signup using Google
                                         </a>
                                      </p>
                                   </div> -->
                                   <div class="form-group">
                                      <p class="text-center">Don't have account? <a href="index.php" id="signup">Sign up here</a></p>
                                   </div>
                                </form>
                         
        				</div>
        			</div>
              
        			  <div id="second">
        			      <div class="myform form ">
                                <div class="logo mb-3">
                                   <div class="col-md-12 text-center">
                                      <h1 >Signup</h1>
                                   </div>
                                </div>
                                <form action="signin.php" name="registration">
                                   <div class="form-group">
                                      <label for="exampleInputEmail1">First Name</label>
                                      <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                   </div>
                                   <div class="form-group">
                                      <label for="exampleInputEmail1">Last Name</label>
                                      <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                   </div>
                                   <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                   </div>
                                   <div class="form-group">
                                      <label for="exampleInputEmail1">Password</label>
                                      <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                                   </div>
                                   <div class="col-md-12 text-center mb-3">
                                      <button type="submit" class=" btn btn-block mybtn btn-danger tx-tfm">Get Started For Free</button>
                                   </div>
                                   <div class="col-md-12 ">
                                      <div class="form-group">
                                         <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                                      </div>
                                   </div>
                                    </div>
                                </form>
                             </div>
        			</div>
        		</div>
              </div>   
            </body>

            <script>
            $("#signup").click(function() {
                $("#first").fadeOut("fast", function() {
                $("#second").fadeIn("fast");
                });
                });
                
                $("#signin").click(function() {
                $("#second").fadeOut("fast", function() {
                $("#first").fadeIn("fast");
                });
                });
                
                
                  
                         $(function() {
                           $("form[name='login']").validate({
                             rules: {
                               
                               email: {
                                 required: true,
                                 email: true
                               },
                               password: {
                                 required: true,
                                 
                               }
                             },
                              messages: {
                               email: "Please enter a valid email address",
                              
                               password: {
                                 required: "Please enter password",
                                
                               }
                               
                             },
                             submitHandler: function(form) {
                               form.submit();
                             }
                           });
                         });
                         
                
                
                $(function() {
                  
                  $("form[name='registration']").validate({
                    rules: {
                      firstname: "required",
                      lastname: "required",
                      email: {
                        required: true,
                        email: true
                      },
                      password: {
                        required: true,
                        minlength: 5
                      }
                    },
                    
                    messages: {
                      firstname: "Please enter your firstname",
                      lastname: "Please enter your lastname",
                      password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                      },
                      email: "Please enter a valid email address"
                    },
                  
                    submitHandler: function(form) {
                      form.submit();
                    }
                  });
                });
                </script>
    </html>
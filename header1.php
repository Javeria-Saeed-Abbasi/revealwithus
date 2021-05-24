<!DOCTYPE html>
<html>
<head>
	<title>Reveal with Us</title>
<link rel="icon" href="images/icons8-silent-filled-50.png" type="image/png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<link href="css/cssAnimation.css" rel="stylesheet" type="text/css"/>
<!-- font awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	
	.navbar-dark{
		background-color: #000;
	}

	div.container a , .navbar-brand span
{
    color: #FFF;
    text-decoration: none;
/*    font: 20px Raleway;*/
    margin: 0px 10px;
    padding: 10px 10px;
    position: relative;
    z-index: 0;
    cursor: pointer;
}


/* Circle behind */
ul.circleBehind a:before, ul.circleBehind a:after , .navbar-brand span:before ,	.navbar-brand span:after	
{
    position: absolute;
    top: 22px;
    left: 50%;
    width: 50px;
    height: 50px;
    border: 4px solid #CC0000;
    transform: translateX(-50%) translateY(-50%) scale(0.8);
    border-radius: 50%;
    background: transparent;
    content: "";
    opacity: 0;
    transition: all 0.3s;
    z-index: -1;
}

ul.circleBehind a:after , .navbar-brand span:after
{
    border-width: 2px;
    transition: all 0.4s;
}

ul.circleBehind a:hover:before , .navbar-brand span:hover:before
{
    opacity: 1;
    transform: translateX(-50%) translateY(-50%) scale(1);
}

ul.circleBehind a:hover:after, .navbar-brand span:hover:after
{
    opacity: 1;
    transform: translateX(-50%) translateY(-50%) scale(1.3);
}
.navbar-brand span{

		border: 2px solid #CC0000;
		border-radius: 100%;
		padding: 5px 10px;
	}

@media (max-width:767px){
	.navbar-nav {
		color:red;
	}
	


}

	
</style>
</head>
<body>
	
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"> <span>R</span> Reaveal With Us</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto circleBehind">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Annonymus.php">Anonymous</a>
        </li>
         </li>
         
        <?php
        if(isset($_SESSION['username'])){
                    
                      echo '<li class="nav-item">
                                <a class="nav-link" href="sql/logout.php">Log Out</a>
                            </li>';
                                               echo ' <li class="nav-item">
                            <a class="nav-link btn btn-danger text-white" href="user_timeline/myprofile.php">My Profile</a>
                          </li>';

                  }else{
                   echo '<li class="nav-item">
          <a class="nav-link " href="form/signin.php">Signin</a>
        </li>';
                  }
              
                  ?>
      </ul>

    </div>
  </div>
</nav>
<!-- //navigation -->
</body>
</html>
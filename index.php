<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Reveal with Us</title>
<link rel="icon" href="images/icons8-silent-filled-50.png" type="image/png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- custom styling -->
<link href="css/styling.css" rel="stylesheet" type="text/css">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<link href="css/cssAnimation.css" rel="stylesheet" type="text/css"/>
<!-- font awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<div class="container">
<?php

require('header1.php');

?>
</div>
<!-- banner -->

 <div class="banner">
<div class="container-fluid">
	<div class="btn-group" role="group" aria-label="Basic example" class="banner-overlay" >
<!--   <button type="button" class="btn btn-danger" class="btn">Left</button>
  <button type="button" class="btn btn-danger" class="btn">Right</button> -->
</div>
</div>
</div>
<!-- //banner -->
<br/>
<!-- show user recent posts -->
<?php
require('userpost.php');
?>


<!-- category -->
<?php
include('cat-card.php');
?>
<!-- //caregory -->

<!-- footer -->
<br/>
<?php
require('footer.php');
?>
	</body>
	</html>
<!DOCTYPE html>
<html>
<head>
	<title>Reveal with Us</title>
<link rel="icon" href="images/icons8-silent-filled-50.png" type="image/png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<!-- js bundle -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<!-- css/  animation -->
<link href="css/cssAnimation.css" rel="stylesheet" type="text/css"/>
<!-- font awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	body{
	margin:0 auto;
	box-sizing: border-box;
}
/*.banner{
	background:url(../images/bg1.jpg) no-repeat 0px 0px;
	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	min-height:600px;
	
}
*/
.img-wrapper {
  position: relative;
  width: 100%;
 }

.banner-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
}

.banner-overlay:before {
  content: ' ';
  display: block;
  /* adjust 'height' to position overlay content vertically */
  height: 70%;
}
.btn{
	background-color:#CC0000;
	border:2px solid #CC0000 ;
	border-radius:100px;
	padding: 10px; 
}
</style>
 </head>
<body>
<!-- <div class="banner">
<div class="container-fluid">
	<div class="btn-group" role="group" aria-label="Basic example" >
  <button type="button" class="btn btn-danger" class="btn">Left</button>
  <button type="button" class="btn btn-danger" class="btn">Right</button>
</div>
</div>
</div> -->
<div class="banner container-fluid">

<div class="img-wrapper">
                <img class="img-responsive" src="../images/bg1.jpg" width="100%">
             <div class="img-overlay">
              <div class="banner-overlay">
  <button type="button" class="btn btn-danger" class="btn">Sign In</button>
  <button type="button" class="btn btn-danger" class="btn">Annonymous</button>
</div>
</div>
</div>
</div>

</body>
</html>
<html>	
<head>
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
<style>
	
	body {
	font-family: 'Roboto', sans-serif;
	background: #fff;
}

/*.conatiner {
	width: 100%;
	height: 500px;
}*/
.wrap {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-box-align: center;
	    -ms-flex-align: center;
	        align-items: center;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	    -ms-flex-direction: row;
	        flex-direction: row;
}

.box {
	margin: 10px;
	width: 300px;
	height: 490px;
	text-align: center;
	border-radius: 3px;
	-webkit-transition: 200ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
	-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);
	        box-shadow: 0 0 15px rgba(0,0,0,0.3);
}
.box:hover {
	margin-bottom: -10px;
	-webkit-box-shadow: 0 0 5px rgba(0,0,0,0.7);
	        box-shadow: 0 0 5px rgba(0,0,0,0.7);
}
.box h1 {
	color: #fff;
	padding: 30px;
	margin-top: 100px;
	text-align: center;
	font-weight: 100;
	font-size: 25px;
	background: rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 30px rgba(0,0,0,0.7);
	        box-shadow: 0 0 30px rgba(0,0,0,0.8);
}

.date h4 {
	color: #fff;
	font-weight: 300;
	text-align: center;
	letter-spacing: 3px;
	text-shadow: 0 0 3px rgba(0,0,0,0.9);
	background-color:#CC0000 ;}
.poster {
	width: 130px;
	height:130px;
	margin: 120px auto;
	position: relative;
	border-radius: 100px;
}
.poster h4 {
	top: 16px;
	color: #fff;
	position: relative;
	font-size: 80px;
	text-align: center;
	font-weight: 100;
}
.one {
	background-image:url('images/png/love1-min.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.two {
	background-image: url('images/png/sad1-min.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
.three {
	background-image: url('images/png/happy-min.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}


.seven {
	background-image: url('images/png/wedding1-min.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
.eight {
	background-image: url('images/png/student1-min.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
.nine {
	background-image: url('images/png/workpace-min.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}






</style>

</head>
<body>
	<?php
	require('header1.php');
	?>
	
	<br/><br/>
<div class="display-4 text-center text-danger bg bg-dark">Categories</div>

<div class="conatiner">
<div class="wrap">

	<div class="box one">
		<div class="date">
			<h4>Category</h4>
		</div>
		<h1>LOVE</h1>
		<div class="poster p1">
		<form action='category.php' method='post' >
			<input type='hidden' value='love' name='categ' >
			<button type='submit' class="btn btn-info"  >View Posts</button>
		</form>
		</div>
	</div>
	
	<div class="box two">
		<div class="date">
			<h4>Category</h4>
		</div>
		<H1>SADNESS</H1>
		<div class="poster p2">
	<form action='category.php' method='post' >
			<input type='hidden' value='sadness' name='categ' >
			<button type='submit' class="btn btn-info"  >View Posts</button>
		</form>
		</div>
	</div>
	
	<div class="box three">
		<div class="date">
			<h4>Category</h4>
		</div>
		<h1>HAPPINESS</h1>
		<div class="poster p6">
			
			<form action='category.php' method='post' >
			<input type='hidden' value='happiness' name='categ' >
			<button type='submit' class="btn btn-info"  >View Posts</button>
		</form>
		</div>
	</div>
	

	</div></div>
<div class="conatiner">
	<div class="wrap">
	<div class="box seven">
		<div class="date">
			<h4>Category</h4>
		</div>
		<h1>MARRIGE</h1>
		<div class="poster p6">
			<form action='category.php' method='post' >
			<input type='hidden' value='marrige' name='categ' >
			<button type='submit' class="btn btn-info"  >View Posts</button>
		</form>
		</div>
	</div>
	
	<div class="box eight">
		<div class="date">
				<h4>Category</h4>
		</div>
		<h1>STUDENT</h1>
		<div class="poster p7">
			<form action='category.php' method='post' >
			<input type='hidden' value='student' name='categ' >
			<button type='submit' class="btn btn-info"  >View Posts</button>
		</form>
		</div>
	</div>
	
	<div class="box nine">
		<div class="date">
				<h4>Category</h4>
		</div>
		<h1>WORKPLACE</h1>
		<div class="poster p8">
		
<form action='category.php' method='post' >
			<input type='hidden' value='workplace' name='categ' >
			<button type='submit' class="btn btn-info"  >View Posts</button>
		</form>		</div>
	</div>
		</div>
</div>
<br/><br/>

</body>
</html>
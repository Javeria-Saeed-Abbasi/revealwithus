<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reveal with Us</title>
<title>Reveal with Us</title>
<link rel="icon" href="../images/icons8-silent-filled-50.png" type="image/png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link href="css/cssAnimation.css" rel="stylesheet" type="text/css"/>
<!-- font awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

              input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	

	 #user_card{
	 	height:400px;
	 	margin-top:50px;
	 	text-align: center;
	 }

</style>
<body>

<?php
require('navbar.php');
     if(isset($_SESSION['userid'])){

?>
<br/><br/>								
<div class="container">
	<div class="row">
		
        
       <div class=" card col-md-4 bg bg-dark" id="user_card">

<div class="panel panel-default">
  
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body mx-auto">
                     <div class="col-sm-6 card-img mx-auto">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <!-- <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div> -->
                <!--Upload Image Js And Css-->
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6 mx-auto">
            <h4 style="color:#00b1b1;">USERNAME </h4></span>
            <hr />
             	<h5 class="text-white text-center"> POSTS</h5>	 
             	<h5 class="text-white text-center"> 12</h5>	 
             	<a href="post_board.php"><button type="button" class="btn btn-danger">Post Secret</button></a>         
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<!--  -->

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    
       
       
       
       
       
       
   
<div class="col-md-7 ml-auto bg bg-secondary " id="user_posts">

	<?php
		require('user_timeline_posts.php');
	?>
</div>  
      








   </div>





</div>         

</div>
<?php

     }else{
       echo "<center>"."<h1>".'You are anoynmous'."</h1>"."</center>";
     }

?>
	</body>
	<script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
</head>
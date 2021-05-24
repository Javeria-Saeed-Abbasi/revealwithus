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

<style>
/*#more {display: none;}*/
#post-img{
  width:300px;
  height:200px;
}
#post-content{
  max-height: 200px;
  line-height: 0px;
}
</style>
</head>
<body>








 <!-- <div class="container py-3">
    <div class="card">
      <div class="row ">
        <div class="col-md-4">
            <img src="images/21.jpg" alt="" class="img-responsive" id="post-img" class="w-100">
          </div>
          <div class="col-md-8 px-3">
            <div class="card-block px-3 bg bg-light">
         <div class="card-header">
       <h5 href="#" class="text-danger">CATEGORY-Name</h5></div>
                <h4 class="card-title" href="postDetails.php">Title</h4>
              <h5 class="card-title">Sub-Title</h5>
              <p class="card-text" href="#">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
             <p class="text-muted">Time and date</p>
              <a href="postDetails.php" class="btn btn-danger">View Details</a>
            </div>
          </div>

        </div>
      </div>
      <hr/>
    </div>

 -->

<!-- 2nd card -->
<!-- <div class="container py-3">
 <div class="card">
      <div class="row ">
        <div class="col-md-4">
            <img src="images/21.jpg" alt="" class="img-responsive" id="post-img" class="w-100">
          </div>
          <div class="col-md-8 px-3">
            <div class="card-block px-3 bg bg-light">
         <div class="card-header">
       <h5 href="#" class="text-danger">CATEGORY-Name</h5></div>
                <h4 class="card-title" href="#">Title</h4>
              <h5 class="card-title">Sub-Title</h5>
              <p class="card-text" href="#">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
             <p class="text-muted">Time and date</p>
              <a href="#" class="btn btn-danger">View Details</a>
            </div>
          </div>

        </div>
      </div>
      <hr/>
    </div>----->
     <div class="display-4 h3 bg bg-danger text-light text-center">Recent Posts</div>
 <?php require('postshow.php')?>
  </div>
  <center>
<div class="show_more_main" id="show_more_main<?php echo $_SESSION['userid']; ?>">
        <span id="<?php echo $_SESSION['userid']; ?>" class="show_more btn btn-primary" title="Load more posts">Show more</span>
        <span class="loding" style="display: none;"><span class="fa fa-setting loding_txt">Loading...</span></span>
    </div>
</center>
 <br/> 
















  </div>  



</body>
<!-- <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script> -->

</html>
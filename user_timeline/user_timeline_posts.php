
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


<h3 class="display-4 text-center bg bg-warning"> My Posts </h3>
 <?php
  $ui = $_SESSION['userid'];
 require('../sql/config.php');
    $sql = "SELECT * from post_data where userid like $ui ORDER BY userid DESC";

    $result = mysqli_query($dbConn, $sql);

    while($row = mysqli_fetch_array($result)) {
      
    ?>

 <div class="container py-3">
    <div class="card">
      <div class="row ">
        <div class="col-md-4">
            <img src="data:image;base64,<?php echo $row["postimage"]; ?>"  alt="" class="img-responsive" id="post-img" class="w-100">
          </div>
          <div class="col-md-8 px-3">
            <div class="card-block px-3 bg bg-light">
         <div class="card-header">
      <h5 href="#" class="text-danger"><?php echo $row['category']; ?></h5></div>
                    <p class=" fa fa-clock-o text-muted">Time and date <?php echo $row["datime"]; ?></p>
                <h4 class="card-title" href="postDetails.php"><?php echo $row["sub"]; ?></h4>
                <h6 class="card-title" href="#"><?php echo $row["sub_title"]; ?></h6>
              <p class="card-text" href="#"><?php echo $row["msg"]; ?></p>
              <form action='postDetails.php' method='POST' >
                <input type="hidden" name='postidd' value="<?php echo $row['postid']?>" >
                <button type='submit' class="btn btn-danger">View Details</button>
              </form>
              
            </div>
          </div>

        </div>
      </div>
      <hr/>
    </div>


    <?php
    }

  mysqli_close($dbConn);
?>
</body>

</html>
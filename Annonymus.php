<!DOCTYPE html>
<html>
<?php

session_start();

?>
<head>
  <title>Reveal with Us</title>
 
<link rel="icon" href="images/icons8-silent-filled-50.png" type="image/png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Reveal Html Javascript " />
  <!-- //Online Bootstrap 4 path -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" >

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link href="css/cssAnimation.css" rel="stylesheet" type="text/css"/>
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!---AJAX-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<!-- fONT Awsome link -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<!-- custom styling -->
<style type="text/css">
  
  body{
    background: url('images/dark red bg.jpeg') no-repeat;
    /*background-color:black;*/
    background-size: cover;
  }

#main{

  background-color:white;
  height: auto;
} 
label{
  font-size: large;
  font-weight:bold;
}
h3{
  color: #CC0000 ;
}

</style>



</head>
<body>

  <?php
     require('sql/config.php');

    // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['subdata'])) {
    // Get image 
    
    $image = $_FILES['image']['name'];
    if($image == ''){
      $imgData = NULL;
      $imageProperties = NULL;
    }else{
     $imgData = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
     $imageProperties = getimageSize($_FILES['image']['tmp_name']);
     }
    // Get text
    $message = mysqli_real_escape_string($dbConn, $_POST['message']);

    //uesrid
    if( isset($_SESSION['userid'])){
          $userid = intval($_SESSION['userid']);
    }else{
      $userid = 'annonymus';
    }

          $username=$_POST['name'];

    // image file directory
    $target = "images/".basename($image);
    
    //subject 
    $subject = $_POST['subject'];

    //date 
    
    $date = date('Y-m-d H:i:s');


    //category
    $category = strtolower($_POST['category']);

    //subtitle
    $sub_title = $_POST['sub_title'];

    $sql = "INSERT INTO post_data (`userid`,`usname`,`sub`,`category`,`msg`,`postimage`,`postimagetype`,`datime`,`sub_title`) VALUES ('$userid','$username','$subject', '$category', '$message','$imgData','{$imageProperties['mime']}','$date','$sub_title')";
    // execute query
    if(mysqli_query($dbConn, $sql)){
       
      header('location:./index.php');
    }else{
      echo "Error: " . $sql . "<br>" . mysqli_error($dbConn);
    }

  }

?>



<div class="container-fluid">

<div class="row align-items-center h-100">
        <div class="col-6 mx-auto">
            <div class="jumbotron" id="main">
              <h3 class="text-center"><i class="fa fa-edit" style="font-size:48px;"></i> Post your Secret</h3>
              <hr/>
  <form action="Annonymus.php" method="post" enctype="multipart/form-data" name="Post_img">
   
     <?php

     if(!isset($_SESSION['username'])){
        echo "<div class='form-row'>";
        echo  "<div class='col-md-12 mb-3'>";
       echo "<label for='validationServer033'>Name</label>";
      echo "<input type='text' class='form-control' name='name' id='validationServer033' placeholder='Name' required>";
        echo '</div>';
        echo '</div>';
    
     }else{
 echo "<div class='form-row'>";
        echo  "<div class='col-md-12 mb-3'>";
        echo "<input type='hidden' class='form-control' name='name' value='{$_SESSION['username']}' id='validationServer033' placeholder='Name' required>";
        echo '</div>';
        echo '</div>';
     }
     ?>

 <div class="form-row">
  <div class="col-md-12 mb-3">
      <label for="validationServer03">Title</label>
      <input type="text" class="form-control" name='subject'  id="validationServer03" placeholder="Subject" required>
 </div>
</div>
<div class="form-row">
  <div class="col-md-12 mb-3">
      <label for="validationServer03">Sub-Title</label>
      <input type="text" class="form-control" name='sub_title' id="validationServer03" placeholder="Subject" required>
 </div>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Select Category</label>
    <select class="form-control" name='category' id="exampleFormControlSelect1">
      <option>Love</option>
      <option>Sadness</option>
      <option>Happiness</option>
      <option>Marriage</option>
      <option>Student</option>
      <option>Workplace</option>
    </select>
  </div>

  <div class="form-group">
      <label for="validationServer03">Message</label>
            <textarea class="form-control" id="message" name="message" rows="8"  placeholder="Reveal your Secert here"></textarea>
          </div>

          
     <label for="validationServer03">Select image to upload:</label>
    <input type="file" name="image" id="image">
          <br/>
          <div class="form-group">
          <div class="form-check">
          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
          <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
          
          <div class="form-group">  
            <button type="submit" name='subdata' class="btn btn-success">Post</button>
            
            <button type="reset" class="btn btn-danger">Discard</button>
          </div>
        </div>  


</form>







            </div>
        </div>
    </div>
<!-- main div ends here -->
</div>
</body>


<script src="js/bootstrap.js"></script>

</html>

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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    
    .card-comments img{width:4rem}

    
.card-body a{
    color:blue;
}
</style>
</head>

<body>
    

<?php
require('header1.php');
?>


<?php
require('banner2.php');
?>
<!--Main layout-->
<?php 
        if(isset($_POST['postidd']))
        {

           require('./sql/config.php');
           $ki = $_POST['postidd'];
    $sql = "SELECT * from post_data where postid LIKE $ki";

    $result = mysqli_query($dbConn, $sql);

    while($row = mysqli_fetch_array($result)) {
        echo $row['sub']
       
?>
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Post-->
            <section class="mt-4">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 mb-4">

                        <!--Featured Image-->
                        <div class="card mb-4 wow fadeIn">

                                   <img src="data:image;base64,<?php echo $row["postimage"]; ?>" style='height:300px;' alt="" class="img-responsive" id="post-img" >

                        </div>
                        <!--/.Featured Image-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn">

                            <!--Card content-->
                            <div class="card-body text-center">

                                 <!--Section heading-->
                                <h1 class="text-center h1 pt-4 mb-3">
                                    <strong><?php echo $row['sub'] ?></strong>
                                </h1>
                                <h5 class="text-center h1 pt-4 mb-3">
                                    <strong><?php echo $row['sub_title'] ?></strong>
                                </h5>
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 d-flex justify-content-center">
                                        <p class="font-small dark-grey-text mb-1">
                                            <strong>Username:</strong><?php
                                                if($row['userid']=='annonymus'){
                                                    echo $row['userid'];
                                                }else{

                                                           $ki = $row['userid'];
                                                    $sqll = "SELECT * from admin_login where userid LIKE $ki";

                                                    $resultt = mysqli_query($dbConn, $sqll);

                                                    while($roww = mysqli_fetch_array($resultt)) {
                                                        echo $roww['firstname'];
                                                    }
                                                }
                                            ?></p>
                                        <p class="font-small grey-text mb-0 ml-3">
                                            <i class="fa fa-clock-o dark-grey-text"></i> <?php echo $row['datime']?></p>
                                    </div>
                                </div>

                                

                                <hr>

                               
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn">

                            <!--Card content-->
                            <div class="card-body">



                                <p class="h5 my-4">Post Content</p>


                                <p><?php echo $row['msg']?></p>

                            </div>

                        </div>
                        <!--/.Card-->

                        

                        <!--Comments-->
                        <div class="card card-comments mb-3 wow fadeIn">
                            <div class="card-header font-weight-bold">3 comments</div>
                            <div class="card-body">

                                <div class="media d-block d-md-flex mt-4">
                                    <!-- <img class="d-flex mb-3 mx-auto " src="images/1.jpg" alt="Generic placeholder image"> -->
                                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                        <h5 class="mt-0 font-weight-bold">Miley Steward
                                            <a href="" class="pull-right">
                                                <i class="fas fa-reply"></i>
                                            </a>
                                        </h5>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                        <div class="media d-block d-md-flex mt-3">
                                            <!-- <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg" alt="Generic placeholder image"> -->
                                            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                                <h5 class="mt-0 font-weight-bold">Tommy Smith
                                                    <a href="" class="pull-right">
                                                        <i class="fas fa-reply"></i>
                                                    </a>
                                                </h5>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                                sunt explicabo.
                                            </div>
                                        </div>

                                        <!-- Quick Reply -->
                                        <div class="form-group mt-4">
                                            <label for="quickReplyFormComment">Your comment</label>
                                            <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

                                            <div class="text-center">
                                                <button class="btn btn-info btn-sm" type="submit">Post</button>
                                            </div>
                                        </div>


                                        <div class="media d-block d-md-flex mt-3">
                                            <!-- <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg" alt="Generic placeholder image"> -->
                                            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                                <h5 class="mt-0 font-weight-bold">Sylvester the Cat
                                                    <a href="" class="pull-right">
                                                        <i class="fas fa-reply"></i>
                                                    </a>
                                                </h5>
                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media d-block d-md-flex mt-3">
                                   <!--  <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image"> -->
                                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                        <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                                            <a href="" class="pull-right">
                                                <i class="fas fa-reply"></i>
                                            </a>
                                        </h5>
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                                        quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                        fuga.
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/.Comments-->

                        <!--Reply-->
                        <div class="card mb-3 wow fadeIn">
                            <div class="card-header font-weight-bold">Leave a reply</div>
                            <div class="card-body">

                                <!-- Default form reply -->
                                <form>

                                    <!-- Comment -->
                                    <div class="form-group">
                                        <label for="replyFormComment">Your comment</label>
                                        <textarea class="form-control" id="replyFormComment" rows="5"></textarea>
                                    </div>

                                    <!-- Name -->
                                    <label for="replyFormName">Your name</label>
                                    <input type="email" id="replyFormName" class="form-control">

                                    <br>

                                    <!-- Email -->
                                    <label for="replyFormEmail">Your e-mail</label>
                                    <input type="email" id="replyFormEmail" class="form-control">


                                    <div class="text-center mt-4">
                                        <button class="btn btn-info btn-md" type="submit">Post</button>
                                    </div>
                                </form>
                                <!-- Default form reply -->



                            </div>
                        </div>
                        <!--/.Reply-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">

                        <!--Card: Jumbotron-->
                        <div class="card blue-gradient mb-4 wow fadeIn">

                            <!-- Content -->
                            <div class="card-body text-danger text-center bg bg-info">

                              <h3>Tags</h3>
                              <a href="#">Love</a> <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                              <a href="#">Love</a>
                                    <br/><br/>
                                <a target="_blank" href="#" class="btn btn-outline-white btn-md bg bg-danger">Read More Secerts
                                  
                                </a>

                            </div>
                            <!-- Content -->
                        </div>
                        <!--Card: Jumbotron-->

                        <!--Card : Dynamic content wrapper-->
                        <div class="card mb-4 text-center wow fadeIn">

                            <div class="card-header h6">Do you want to get informed about new Secrets?</div>

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Default form login -->
                                <form>

                                    <!-- Default input email -->
                                    <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                                    <input type="email" id="defaultFormLoginEmailEx" class="form-control">

                                    <br>

                                    <!-- Default input password -->
                                    <label for="defaultFormNameEx" class="grey-text">Your name</label>
                                    <input type="text" id="defaultFormNameEx" class="form-control">

                                    <div class="text-center mt-4">
                                        <button class="btn btn-info btn-md" type="submit">Sign up</button>
                                    </div>
                                </form>
                                <!-- Default form login -->

                            </div>

                        </div>
                        <!--/.Card : Dynamic content wrapper-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn">

                            <div class="card-header">Related Secrets</div>

                            <!--Card content-->
                            <div class="card-body">

                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img src="data:image;base64,<?php echo $row["postimage"]; ?>" style='height:100px; width: 100px;' alt="placeholder image" class="d-flex mr-3img-responsive" >
                                       <!--  <img class="d-flex mr-3" src="images/1.jpg" alt=" placeholder image" width="100px" height="100px"> -->
                                        <div class="media-body">
                                            <a href="postDetails.php">
                                                <h5 class="mt-0 mb-1 font-weight-bold text-danger">
                                                    <?php echo $row['sub'] ?></h5>
                                            </a>
                                            <?php echo $row['msg']?>
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img src="data:image;base64,<?php echo $row["postimage"]; ?>" style='height:100px; width: 100px;' alt="placeholder image" class="d-flex mr-3img-responsive" >
                                        <div class="media-body">
                                            <a href="#">
                                                <h5 class="mt-0 mb-1 font-weight-bold text-danger">
                                                    <?php echo $row['sub'] ?></h5>
                                            </a>
                                           <?php echo $row['msg']?>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="d-flex mr-3" src="images/1.jpg" alt=" placeholder image" width="100px" height="100px">
                                        <div class="media-body">
                                            <a href="">
                                                <h5 class="mt-0 mb-1 font-weight-bold">Title</h5>
                                            </a>
                                            Cras sit amet nibh libero, in gravida nulla (...)
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Post-->

        </div>
    </main>
    <!--Main layout-->




<?php
    }
        }else{
      
        }
        
        ?>
<!-- footer -->
<?php
require('footer.php');
?>
</body>
<script type="text/javascript">
            // Animations initialization
        new WOW().init();
</script>
</html>
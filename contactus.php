<!DOCTYPE html>

<html>
<head>
	<title>Reveal with Us</title>
<link rel="icon" href="images/icons8-silent-filled-50.png" type="image/png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<!-- bootstrap 4 online link -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<link href="css/cssAnimation.css" rel="stylesheet" type="text/css"/>
<!-- font awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	
	.contact-bg{

		background-image:url('images/bg1.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		border:2px solid black;
		border-radius: 30px 30px;
			}
	label{
		color:white;
	}

	.cont-text input[type=text] {
		background-color: transparent;	
		color:white;
		border: 2px solid white;
		border-radius: 10px;
	}
	
	.cont-email input[type=email] {
		background-color: transparent;	
		color:white;
		border: 2px solid white;
		border-radius: 10px;
	}
	.cat-select select{
		background-color: transparent;	
		color:white;
		border: 2px solid white;
		border-radius: 10px;
	}
	.cont-mesg textarea{
		background-color: transparent;	
		color:white;
		border: 2px solid white;
		border-radius: 10px;
	}
</style>
</head>
<body>
	<?php
require('header1.php')
	?>
	<br/>
	<br/>
	<br/>
	<br/>
	<!-- form -->
 <div class="container contact-bg">

           
            <?php
    require('sql/config.php');
    if (isset($_POST['submit'])) {
        # code...
    
if($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_POST['name'];
    $lname = $_POST['surname'];
    $email = $_POST['email'];
    $need = $_POST['need'];
    $message = $_POST['message'];

    $query = "INSERT INTO `feedback`(`id`, `f_name`, `l_name`, `email`, `category`, `message`) VALUES ('' , '".$name."' , '".$lname."' , '".$email."' , '".$need."' , '".$message."')";
    if ($dbConn->query($query)) {
       echo "INSERTED".$dbConn->error; 
    }
    else{
        echo "insered";
    }
}

}
?>

        <form id="contact-form" method="POST" action="contactus.php" role="form">



    
<h3 class="display-4 text-white text-center">CONTACT US</h3>
    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group cont-text">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname (optional) *"   data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group cont-text">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname (optional)*"  data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group cont-email">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group cat-select">
                    <label for="form_need">Category * (optional)</label>
                    <select id="form_need" name="need" class="form-control"  data-error="Please specify your need.">
                        <option value=""></option>
                        <option value="Love">Loves</option>
                        <option value="Sadness">Sadness</option>
                        <option value="Happiness">Happiness</option>
 						<option value="Student">Student</option>
 						<option value="Workplace">Workplace</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group cont-mesg">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-danger btn-send" value="Send message">
            </div>
        </div>
       
    </div>

</form>


 
<br/>
<center>
<div class="h4">
<a href = "mailto:jiyasaeed333@gmail.com?subject = Feedback&body = Message">Send us mail at:
jiyasaeed333@gmail.com
</a>
<br/><br/>
<a href = "mailto:jiyasaeed333@gmail.com?subject = Feedback&body = Message">Send us mail at:
revealwithus@gmail.com
</a>
</div>
</center>
<br/>

</div>


<br/>
<br/>

<?php

require('footer.php');
?>
</body>

<script>$(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    $('#contact-form').validator();


    // when the form is submitted
    $('#contact-form').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    // data = JSON object that contact.php returns

                    // we recieve the type of the message: success x danger and apply it to the 
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    // let's compose Bootstrap alert box HTML
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    
                    // If we have messageAlert and messageText
                    if (messageAlert && messageText) {
                        // inject the alert to .messages div in our form
                        $('#contact-form').find('.messages').html(alertBox);
                        // empty the form
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});
</script>

</html>
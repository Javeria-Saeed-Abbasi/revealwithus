
HTML Code segment  from “validation.php”


<!DOCTYPE html>
<html>
<head>
<title>Form Validation with PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet">
<style type="text/css">
	@import "http://fonts.googleapis.com/css?family=Droid+Serif";
/* Above line is to import Google font style */
.maindiv{
margin:0 auto;
width:980px;
height:500px;
background:#fff;
padding-top:20px;
font-size:14px
}
.title{
width:500px;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center;
font-family:'Droid Serif',serif
}
.form_div{
width:70%;
float:left
}
form{
width:440px;
border:1px dashed #ccc;
padding:10px 30px 40px;
background-color:#f0f8ff;
font-family:'Droid Serif',serif
}
form h2{
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
textarea{
width:250px;
height:60px;
border-radius:1px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:5px;
border:none
}
.input{
width:250px;
height:15px;
border-radius:1px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:5px;
border:none;
margin-bottom:20px
}
.submit{
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:5px;
margin-top:40px;
border:none;
width:100px;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:16px
}
.error{
color:red
}
.radio{
width:15px;
height:15px;
border-radius:1px;
margin-top:10px;
padding:5px;
border:none;
margin-bottom:20px
}
.formget{
float:right;
margin-top:85px
}

</style>
</head>
<body>
	<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
// On submitting form below function will execute.
if(isset($_POST['submit'])){
if (empty($_POST["name"])) {
$nameError = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
$emailError = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
$emailError = "Invalid email format";
}
}
if (empty($_POST["website"])) {
$website = "";
} else {
$website = test_input($_POST["website"]);
// check address syntax is valid or not(this regular expression also allows dashes in the URL)
if (!preg_match("/b(?:(?:https?|ftp)://|www.)[-a-z0-9+&@#/%?=~_|!:,.;]*[-a-z0-9+&@#/%=~_|]/i",$website)) {
$websiteError = "Invalid URL";
}
}
if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}
if (empty($_POST["gender"])) {
$genderError = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here
?>s
<div class="maindiv">
<div class="form_div">
<div class="title">
<h2>Form Validation with PHP.</h2>
</div>
<form action="validation.php" method="post">
<h2>Form</h2>
<span class="error">* required field.</span>
Name:
<input class="input" name="name" type="text" value="">
<span class="error">* <?php echo $nameError;?></span>
E-mail:
<input class="input" name="email" type="text" value="">
<span class="error">* <?php echo $emailError;?></span>
Gender:
<input class="radio" name="gender" type="radio" value="female">Female
<input class="radio" name="gender" type="radio" value="male">Male
<span class="error">*<?php echo $genderError;?></span>
Website:
<input class="input" name="website" type="text" value="">
<span class="error"><?php echo $websiteError;?></span>
Comment:
<textarea cols="40" name="comment" rows="5">
</textarea>
<input class="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</body>
</html>
CSS File : style.css




      <?php 
require('../sql/config.php');


   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
  
$firstname= $_POST['firstname'];
$lastname=$_POST['lastname'];
$email = $_POST['email'];
$password= md5($_POST['password']);

 $sql = "INSERT INTO admin_login (firstname,lastname,email,passw)
 VALUES ('".$firstname."','".$lastname."','".$email."','".$password."')";
 echo $sql;      
   if ($dbConn->query($sql) === TRUE) {
     echo "New record created successfully";
     header("Location:signin.php");
 } else {
     echo "Error: " . $sql . "<br>" . $dbConn->error;
 }
 }

?>
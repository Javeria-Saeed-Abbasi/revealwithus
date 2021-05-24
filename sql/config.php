<?php
/**********************************************************************
 *Contains all the basic Configuration
 *dbHost = Host of your MySQL DataBase Server... Usually it is localhost
 *dbUser = Username of your DataBase
 *dbPass = Password of your DataBase
 *dbName = Name of your DataBase
 **********************************************************************/
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'reveal';
$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

 if ($dbConn->connect_error)
 {
  die("Connection failed: " . $dbConn->connect_error);
 } 
echo "Connected successfully";
?>
<?php
$dbHost ='localhost';
$dbUser ='root';
$dbPass ='';
$dbName ='demo';
$dbConn =mysql_connect($dbhost, $dbUser, $dbPass, $dbName);
if ($dbConn->connect_error)
{
	die("Connection failed: " .$dbConn->connect_error);
}
echo "Connected Successfully";
?>
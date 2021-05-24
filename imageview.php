

<?php
     require('./sql/config.php');

        if(isset($_GET['image_id'])) {

        $id = mysqli_real_escape_string($dbConn, $_GET['image_id']);    
        $sql = "SELECT postimage,postimagetype,postid FROM post_data WHERE postid='$id'";
		$result = mysqli_query($dbConn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
        $row = mysqli_fetch_array($result);
            
        header("Content-type:{$row['postimagetype']}");
          
        echo $row["postimage"];
	}
	mysqli_close($dbConn);
?>


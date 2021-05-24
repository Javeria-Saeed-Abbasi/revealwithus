


<div class="container myposts">

<?php


    require('./sql/config.php');
    //LIMIT 5
    $sql = "SELECT * from post_data ORDER BY postid DESC ";

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


<!-- for show more posts -->
<!-- <script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:'loadmore.php',
            data:'id='+ID,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.myposts').append(html);
            }
        });
    });
});
</script>
https://www.codexworld.com/load-more-data-using-jquery-ajax-php-from-database/ -->
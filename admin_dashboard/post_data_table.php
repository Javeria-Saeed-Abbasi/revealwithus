<html>
<head>
<link rel="icon" href="../images/icons8-silent-filled-50.png" type="image/png"/>
<style>
	label{
		font-weight: bold;
		font-size: 16px;
	}
</style>
</head>
<body>
<?php
require('navbar.php');
 $sql = "SELECT * from post_data";
 $result = mysqli_query($dbConn, $sql);

    while($row = mysqli_fetch_array($result)) {
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Post Data</li>

        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Users Posting Data Table</div>
            <br>
            
            	<center>
            <button type="button" href="#" class="btn btn-primary mybtn " data-toggle="modal" data-target="#myModal">Edit</button>
             <div class="container col-md-6 mx-auto "></CENTER>
   <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header  bg bg-dark text-white h3">
        <center>  <span class="modal-title">Post Data Table</span></center>
          <button type="button" class="close text-white" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<div class="form-div">
 
    
         	
 <form  action="" method="POST" name="posts" enctype="multipart/form-data" >


    

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
         <!--  <div class="form-group">
          <div class="form-check">
          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
          <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div> -->
          
          <div class="form-group">  
            <button type="submit" name='subdata' class="btn btn-success">Post</button>
            
            <button type="reset" class="btn btn-danger">Discard</button>
          </div>
        </div>  


</form>





		</div>
        </div>
        
       
      </div>
    </div>
  </div>
  
</div>
      
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Userid</th>
                    <th>Postid</th>
                    <th>Username</th>
                    <th>Subject/Title</th>
                    <th>Sub-Tile</th>
                    <th>Category</th>
                    <th>Date/time</th>
                    <th>Mesg</th>
                    <th>Post-img</th>
                    <th>Image Type</th>
                    </tr>
                </thead>
                <tfoot>
                 <tr>
                    <th>Userid</th>
                    <th>Postid</th>
                    <th>Username</th>
                    <th>Subject/Title</th>
                    <th>Sub-Tile</th>
                    <th>Category</th>
                    <th>Date/time</th>
                    <th>Mesg</th>
                    <th>Post-img</th>
                    <th>Image Type</th>
                    </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td><?php echo $row['postid']?></td>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row["sub"]; ?></td>
                    <td><?php echo $row["sub_title"]; ?></td>
                    <td><?php echo $row['category'];?></td>
                     <td><?php echo $row["datime"]; ?></td>
                     <td><?php echo $row["msg"]; ?></td>
                    <td>image</td>
                    <td>2011/07/25</td>
                    
                   <td> <button type="button" class="btn btn-danger">Delete</button></td>
          <td>  <button type="button" class="btn btn-success">Update</button></td>	
                  </tr>

                  <tr>
                    <td>Tiger Nixon</td>
                    <td><?php echo $row['postid']?></td>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row["sub"]; ?></td>
                    <td><?php echo $row["sub_title"]; ?></td>
                    <td><?php echo $row['category'];?></td>
                     <td><?php echo $row["datime"]; ?></td>
                     <td><?php echo $row["msg"]; ?></td>
                    <td>image</td>
                    <td>2011/07/25</td>
                   <td> <button type="button" class="btn btn-danger">Delete</button></td>
          <td>  <button type="button" class="btn btn-success">Update</button></td>	
                  </tr>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td><?php echo $row['postid']?></td>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row["sub"]; ?></td>
                    <td><?php echo $row["sub_title"]; ?></td>
                    <td><?php echo $row['category'];?></td>
                     <td><?php echo $row["datime"]; ?></td>
                     <td><?php echo $row["msg"]; ?></td>
                    <td>image</td>
                    <td>2011/07/25</td>
                   <td> <button type="button" class="btn btn-danger">Delete</button></td>
          <td>  <button type="button" class="btn btn-success">Update</button></td>	
                 </tr>
                 <tr>
                    <td>Tiger Nixon</td>
                    <td><?php echo $row['postid']?></td>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row["sub"]; ?></td>
                    <td><?php echo $row["sub_title"]; ?></td>
                    <td><?php echo $row['category'];?></td>
                     <td><?php echo $row["datime"]; ?></td>
                     <td><?php echo $row["msg"]; ?></td>
                    <td>image</td>
                    <td>2011/07/25</td>
                   <td> <button type="button" class="btn btn-danger">Delete</button></td>
          <td>  <button type="button" class="btn btn-success">Update</button></td>	
                  </tr>
                </tbody>

              </table>

            </div>
               <?php
    }
	mysqli_close($dbConn);
?>

          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     <!--  <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>
 -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
}
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../sql/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

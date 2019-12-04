<?php

/*include "inc/header.php";
*/include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();

?>

<!-- Select data from teacher table -->
<?php 
  if (isset($_GET['upd'])) {
    $id     = $_GET['upd'];
    $query  = "SELECT * FROM teachers WHERE teacher_id=$id ";
    $fire   = $run->conn->query($query);
    $data   =mysqli_fetch_assoc($fire);

  }


 ?>
<!-- Query for Update Teacher -->
<?php 
  if (isset($_POST['submit'])) {

      $img = $_FILES['img']['name'];
      move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$img);
      $name         = $_POST['name'];
      $designation  = $_POST['Designation'];
      $institute    = $_POST['institute'];

      $query = "UPDATE teachers SET name='$name', designation='$designation', institute='$institute', img='$img' WHERE teacher_id=$id";
      $fire = $run->conn->query($query);
      if ($fire) {
        echo "Teacher Data Update...";
        header("Location:teacher.php");
      }

  }
?>


    <div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <div class="">
          <h2 class="page-header">Add Teacher </h2>
          <form class="form-horizontal " action="" method="post" enctype="multipart/form-data" >

            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-4">
                <input type="name" class="form-control" id="name" required value="<?php echo $data['name'] ?>" name="name">
              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-sm-2" for="Designation">Designation:</label>
              <div class="col-sm-4">          
                <input type="text" class="form-control" id="Designation" required value="<?php echo $data['designation'] ?>" name="Designation">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="post">Post:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="institute" required value="<?php echo $data['institute'] ?>" "> 
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="post">Image:</label>
              <div class="col-sm-4">
                <p>* maximum upload file size: 2 mb.</p>
                <input type="file" class="form-control-file" required name="img" > 
              </div>
            </div>

            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
     </div>


<!-- footer -->
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

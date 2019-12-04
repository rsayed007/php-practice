<?php

include "inc/header.php";
include "../lib/class.php";

/*Data show in form*/

if (!isset($_GET['catid'])||$_GET['catid']== NULL) {
  header("Location:add_cat.php");
}else{
  $id = $_GET['catid'];
  $query  = "SELECT * FROM category WHERE id=$id";
  $fire   = $run->conn->query($query);
  $user   = mysqli_fetch_assoc($fire);
  /*echo $user['cat_name'];*/
}
?>
      <!-- update category -->
<?php 
  if (isset($_POST['update'])) {
    $cat_name = $_POST['cat_name'];

    $query  = "UPDATE category SET cat_name='$cat_name' WHERE id=$id ";
    $fire   = $run->conn->query($query);
    if ($fire) {
      echo "Category Update successful";
      header("Location:add_cat.php");
    }
  }
?>

        <div class="col-sm-6 col-sm-offset-3  main">
          <h1 class="page-header">Category</h1>
            <form method="post" action="">
              <div class="form-group">
                <label for="text">Edit Category</label>
                <input type="text" class="form-control" name="cat_name" id="cat_name"  value="<?php echo $user['cat_name']; ?>" " >
              </div>
              <button type="submit" name="update" id="update" class="btn btn-default">Update</button><br>
            </form>
         </div>
          
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

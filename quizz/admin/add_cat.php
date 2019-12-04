<?php

include "inc/header.php";
include "../lib/class.php";
$cat=new user();
$category=$cat->categoryShow();
 header("Cache-Control: no-cache, must-revalidate");

//print_r($category);
?>



        <div class="col-sm-6 col-sm-offset-3  main">
          <h1 class="page-header">Category</h1>
          <label for="text">Add new Category</label><br><br>

<!-- Query ******************************************************* -->

<!-- delete catagory -->
<?php 
  if (isset($_GET['delcat'])) {
    $id     = $_GET['delcat'];
    $query  = "DELETE FROM category WHERE id=$id";
    $fire   = $run->conn->query($query);
    if ($fire) {
/*      echo "Category delete Successfully!";
*/      echo '<div class="alertLog alert alert-success alert-dismissible ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Info !!!</strong>Category delete Successfully!..</center>
              </div>';
    }
  }
 ?>
<!-- Insert Category -->
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $cat_name = $_POST['cat_name'];

    /*Query for category Insert*/
    $insert = "INSERT INTO category(cat_name) VALUES('$cat_name')";
    /*Query for category chack*/
    $chack      = "SELECT cat_name FROM category WHERE cat_name='$cat_name' ";
    $catChack  = $run->conn->query($chack);


    $msg='';
    if($run->conn->query($chack)){
      if ($catChack->num_rows>0) {
          echo '<div class="alertLog alert alert-danger alert-dismissible  ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Info !!!</strong>We have alrady this category !!!</center>
              </div>';
        }
        else{
          if ($run->conn->query($insert)) {
            echo '<div class="alertLog alert alert-success alert-dismissible  ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Successfully</strong>  Add new Category..</center>
              </div>';
          }
        }
    }
  }
/*
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $cat_name = $_POST['cat_name'];

    $query   = "INSERT INTO category(cat_name) VALUES('$cat_name')";
    $fire   = $run->conn->query($query);
    if ($fire) {
      echo "data submit";
    }
  }
*/
 ?>
<!-- Query ******************************************************* -->


          <form method="post" action="add_cat.php">
            <div class="form-group">
              <br>
              <input type="text" class="form-control" name="cat_name"  placeholder="Add new Category" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button><br>
          </form>

        
                      <!-- Category Show -->
            <div class="container col-sm-12">
              <h2></h2>
                        
              <table class="table table-striped table-hover table-bordered ">
                                    
                <thead>
                  <tr>
                    <th>Serial No:</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php
                $i=1;
                foreach($category as $c)
                  {?>
                <tbody>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $c['cat_name'];?></td>
                    <td><a  href="editecat.php?catid=<?php echo $c['id'];?>">Edit</a> || <a onclick="return confirm('Are you sure to Delete this Category!')" href="add_cat.php?delcat=<?php echo $c['id'];?>">Delete</a></td>
                  </tr>
                </tbody>
              <?php $i++;}?>

              </table>
            </div>
        <!--  end -->
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

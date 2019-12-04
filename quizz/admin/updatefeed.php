<?php

include "inc/header.php";
include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();

?>

<?php 
 if (!isset($_GET['feedid'])|| $_GET['feedid']==NULL) {
   echo "<script>window.location = 'feedback.php'; </script> ";
 }else{
  $id= $_GET['feedid'];
 }
?>

<!-- query for update -->
<?php 
  if (isset($_POST['update'])) {
    $name         = $_POST['name'];
    $designation  = $_POST['designation'];
    $post         = $_POST['post'];

    $query  = "UPDATE feedback SET name='$name', designation='$designation', post='$post' WHERE feed_id=$id ";
    $fire   = $run->conn->query($query);
    if ($fire) {
        echo "Message successfully update ";
    }else{
      echo "Somthing wrong";
    }
  }

?>

    <div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <h1 class="page-header">Inbox</h1>
        <p class="text-center">View Message</p><hr>
        <?php 
          if ($_SERVER['REQUEST_METHOD']== 'POST') {
            header('location:feedback.php');
            }

         ?>

          <?php 
                $query  = "SELECT * FROM feedback WHERE feed_id=$id ";
                $fire   = $run->conn->query($query);
                if (mysqli_num_rows($fire)>0) {
                $i=1;
                while ($feed = mysqli_fetch_assoc($fire)) 
                {
                ?>
              <form class="form-inline" method="post" action="">
                <div class="form-group">
                  <label for="">Nmae:</label>
                  <input type="text" name="name"  value="<?php echo $feed['name']; ?>" >
                </div><br><br>

                <div class="form-group">
                  <label for="">Designation:</label>
                  <input type="text" name="designation"  value="<?php echo $feed['designation']; ?>" >
                </div><br><br>

                <div class="form-group">
                  <label for="">Message: </label><br>
                  <textarea  cols="120" rows="5" name="post" > <?php echo $feed['post']; ?></textarea>
                </div><br><br>
                <button type="submit" name="update" class="btn btn-default">Save</button>
              </form>  
            <?php $i++;} ?>
           <?php } ?>
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

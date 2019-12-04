<?php

include "inc/header.php";
include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();

?>
<!-- Query for Delete part -->
<?php 
  $m='';
  if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query  = "DELETE FROM teachers WHERE teacher_id=$id";
    $fire   = $run->conn->query($query);
    if ($fire) {
      $m ="Data delete";
    }
  }

?>


    <div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <div>
          <h2 class="text-center"><strong>our teachers</strong> <span class="pull-right btn btn-info"><a href="teacherAdd.php">Add Teacher</a></span></h2>


          <hr>
          <span class="text-center"> <?php echo $m; ?></span>
        </div>
              <!-- Our teachers part -->
                <div id="services" class="container-fluid content-padding services">
                 <div class="row section-heading">
                 <?php 
                  $query = "select * from teachers";
                  $post  = $run->select($query);
                  if ($post) {
                    while ($result = $post->fetch_assoc()) {
                 ?>

                  <div class="col-sm-10 col-sm-offset-1 mix web">
                    <div class=" row">
                      <span class="pull-right "><a href="teacherUP.php?upd=<?php echo $result['teacher_id'] ?>">Update</a>||<a onclick="return confirm('Are you sure !!!')" href="?del=<?php echo $result['teacher_id'] ?>">Delete</a></span>
                      <img style="width: 150px;" src="../img/<?php echo $result['img']; ?>" alt="">
                      <h4><?php echo $result['name']; ?></h4>
                      <h5><?php echo $result['designation']; ?><br> <?php echo $result['institute']; ?></h5>
                      
                      <br><hr>
                    </div>
                  </div>

                    <?php } ?> <!-- end while loop -->
                  <?php } else{ echo "";}?>

                </div>
              </div>
          <!-- text carosol start -->
        </div>
     </div>

<div class="container">
  <div class="row">
    <div class="col-md-12" style = "margin-top:20px;">

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

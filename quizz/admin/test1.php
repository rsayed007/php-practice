<?php

/*include "inc/header.php";
*/include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();
?>
<!-- Query for delete feed back -->
<?php 

if (isset($_GET['del'])) {
  $id   = $_GET['del'];
  $query  = "DELETE FROM feedback WHERE feed_id=$id";
  $fire   = $run->conn->query($query);
  if ($fire) {
    echo "Data delete from database";
  }else{
    echo "Somthing Wrong !!!";
  }
}
?>

<div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <div class="page-header ">
          <a class="pull-right btn btn-info" href="addfeed.php">Add Feedback Speech</a>
          <h1>Feedback Speech</h1>
        </div>
              <table class="table table-striped table-hover table-bordered ">
                <thead>
                  <tr>
                    <th>S/N:</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Post</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $query  = "select * from feedback";
                    $fire   = $run->conn->query($query);
                    if (mysqli_num_rows($fire)>0) {
                      $i=0;
                      while ($feed = mysqli_fetch_assoc($fire)) {
                        echo $feed['feed_id'];
                      ?>

                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $feed['name']; ?></td>
                    <td><?php echo $feed['designation']; ?></td>
                    <td><?php echo $feed['post']; ?></td>
                    <td>
                      <a  href="viewfeed.php?feedid=<?php echo $feed['feed_id'];?>">View</a>||
                      <a  href="?del=<?php echo $feed['feed_id'];?>">Delete</a>
                    </td>
                  </tr>
            <?php $i++;}}  ?>
                </tbody>
              </table>
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

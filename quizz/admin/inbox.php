<?php

include "inc/header.php";
include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();

?>
<?php 
  if (isset($_GET['delid'])) {
    $id = $_GET['delid'];
    $query  = "DELETE FROM contactus WHERE id=$id";
    $fire   = $run->conn->query($query);
    if ($fire) {
      echo "Message Delete successfully";
    }
  }

?>



    <div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <h1 class="page-header">Inbox</h1>
              <table class="table table-striped table-hover table-bordered ">
               
<?php 
  if (isset($_GET['seenid'])) {
    $seenid = $_GET['seenid'];
    $m='';
    $m2='';
    $query = "UPDATE contactus SET    stats='1' WHERE id='$seenid' ";
    $fire = $run->conn->query($query);
    if ($fire) {
      echo "Message sent in seen box";
    }else{
      echo "Somthing wrong";
    }
  }

?>
                                
                <thead>
                  <tr>
                    <th>S/N:</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
        
                <tbody>
                  <?php 
                $query  = "SELECT * FROM contactus WHERE stats=0 order by id desc";
                $fire   = $run->conn->query($query);
                if (mysqli_num_rows($fire)>0) {
                $i=1;
                while ($mesg = mysqli_fetch_assoc($fire)) 
                {
                ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $mesg['cName']; ?></td>
                    <td><?php echo $mesg['cEmail']; ?></td>
                    <td><?php echo $fm->textShort($mesg['cText'], 30); ?></td>
                    <td><?php echo $fm->formetDate($mesg['date']); ?></td>
                    <td>
                      <a  href="viewmesg.php?mesgid=<?php echo $mesg['id'];?>">View</a>||
                      <a  href="replaymesg.php?mesgid=<?php echo $mesg['id'];?>">Reply</a>||
                      <a onclick="return confirm('Are you sure to send Message in seen box?')" href="?seenid=<?php echo $mesg['id']; ?>">Seen</a>
                    </td>
                  </tr>
                <?php $i++;} ?>
              <?php }
              else{?>
                  <tr>
                    <td colspan="6" class="text-center">
                      <h2 class="text-muted">There are No Message </h2>
                    </td>
                  </tr>
             <?php } ?>
                </tbody>
              </table>
        </div>
     </div>



<!-- Seen inbox -->
<div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <h1 class="page-header">Seen Message</h1>
              <table class="table table-striped table-hover table-bordered ">
                                    
                <thead>
                  <tr>
                    <th>S/N:</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
        
                <tbody>
                  <?php 
                $query  = "SELECT * FROM contactus WHERE stats=1 order by id desc";
                $fire   = $run->conn->query($query);
                if (mysqli_num_rows($fire)>0) {
                $i=1;
                while ($mesg = mysqli_fetch_assoc($fire)) 
                {
                ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $mesg['cName']; ?></td>
                    <td><?php echo $mesg['cEmail']; ?></td>
                    <td><?php echo $fm->textShort($mesg['cText'], 30); ?></td>
                    <td><?php echo $fm->formetDate($mesg['date']); ?></td>
                    <td>
                      <a onclick="return confirm('Are you sure to Delete this Msg ')" href="?delid=<?php echo $mesg['id']; ?>">Delete</a>
                    </td>
                  </tr>
                <?php $i++;} ?>
              <?php }
              else{?>
                  <tr>
                    <td colspan="6" class="text-center">
                      <h2 class="text-muted">There are No Seen Message </h2>
                    </td>
                  </tr>
             <?php } ?>
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

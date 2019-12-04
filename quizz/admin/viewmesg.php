<?php

include "inc/header.php";
include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();

?>
<?php 
 if (!isset($_GET['mesgid'])|| $_GET['mesgid']==NULL) {
   echo "<script>window.location = 'inbox.php'; </script> ";
 }else{
  $id= $_GET['mesgid'];
 }


 ?>


    <div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <h1 class="page-header">Inbox</h1>
        <p class="text-center">View Message</p><hr>
        <?php 
          if ($_SERVER['REQUEST_METHOD']== 'POST') {
             echo "<script>window.location = 'inbox.php'; </script> ";
          }

         ?>

          <?php 
                $query  = "SELECT * FROM contactus WHERE id=$id ";
                $fire   = $run->conn->query($query);
                if (mysqli_num_rows($fire)>0) {
                $i=1;
                while ($mesg = mysqli_fetch_assoc($fire)) 
                {
                ?>
              <form class="form-inline" action="">
                <div class="form-group">
                  <label for="">Nmae:</label>
                  <input type="text" readonly value="<?php echo $mesg['cName']; ?>" >
                </div>
                <div class="form-group pull-right">
                  <label  >Date:</label> <br><?php echo $fm->formetDate($mesg['date']); ?>
                  
                </div><br><br>
                <div class="form-group">
                  <label for="">Email:</label>
                  <input type="email" readonly value="<?php echo $mesg['cEmail']; ?>" >
                </div><br><br>
                <div class="form-group">
                  <label for="">Message: </label><br>
                  <textarea readonly cols="120" rows="5" > <?php echo $mesg['cText']; ?></textarea>
                </div><br><br>
                <button type="submit" class="btn btn-default">OK</button>
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

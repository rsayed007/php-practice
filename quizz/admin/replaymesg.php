<?php

include "inc/header.php";
include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();

?>
<?php 
 if (!isset($_GET['mesgid'])|| $_GET['mesgid']==NULL) {
/*   echo "<script>window.location = 'inbox.php'; </script> ";
*/ }else{
  $id= $_GET['mesgid'];
 }
?>

<?php 
  $m='';
  $m2='';
  //$id= $_GET['mesgid'];
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to       = $fm->validation($_POST['toEmail']);
    $from     = $fm->validation($_POST['fromEmail']);
    $subject  = $fm->validation($_POST['subject']);
    $message  = $fm->validation($_POST['message']);

    $sendmail = mail($to, $subject, $message, $from);
    if ($sendmail) {
      $m = " <span class='sucess'> Message sent successfully. </span> ";
    }else{
      $m2= " <span class='error'> Somthing went Wrong. </span> ";
    }
  }
?>


    <div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <h1 class="page-header">Inbox</h1>
        <p class="text-center">Replay Message</p><hr>

        <?php echo $m; ?>
        <?php echo $m2; ?>

          <?php 
                $query  = "SELECT * FROM contactus WHERE id=$id ";
                $fire   = $run->conn->query($query);
                if ($fire) {
                $i=1;
                while ($mesg = mysqli_fetch_assoc($fire)) 
                {
                ?>
              <form class="form-inline" action="">
                <div class="form-group">
                  <label for="">To:      </label>
                  <input type="email" readonly name="toEmail" value="<?php echo $mesg['cEmail']; ?>" >
                </div><br><br>
                <div class="form-group">
                  <label for="">From:     </label>
                  <input type="email"  name="fromEmail" placeholder="Please enter your mail" >
                </div><br><br>
                <div class="form-group">
                  <label for="">Subject:     </label>
                  <input type="text"  name="subject" placeholder="Email Subject" >
                </div><br><br>
                <div class="form-group">
                  <label for="">Message:  </label><br>
                  <textarea name="message" cols="120" rows="5" > write your message ...</textarea>
                </div><br><br>
                <button type="submit" name="submit" class="btn btn-default">Send</button>
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

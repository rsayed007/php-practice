<?php

include "inc/header.php";
include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();

?>
<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name         = $fm->validation($_POST['name']);
      $designation  = $fm->validation($_POST['Designation']);
      $postf         = $fm->validation($_POST['postf']);
    
    $query  = "INSERT INTO feedback(post,name,designation) VALUES('$postf','$name','$designation')";
    $fire   = $run->conn->query($query);
    if ($fire) {
      header('Location:feedback.php');
      echo 'Data submited';
    }else{
      echo "Somthing wrong";
    }
  }

?>


    <div class="col-sm-10 col-sm-offset-2 main" style="padding: 50px;">
      <div class="main2">
        <div class="">
          <h2 class="page-header">Feedback Speech</h2>
          <form class="form-horizontal " action="" method="post">

            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-4">
                <input type="name" class="form-control" id="name" required placeholder="Enter name" name="name">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="Designation">Designation:</label>
              <div class="col-sm-4">          
                <input type="text" class="form-control" id="Designation" required placeholder="Enter Designation" name="Designation">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="post">Post:</label>
              <div class="col-sm-8">
                <p class="bg-info col-sm-4">* maximum 200 characters.</p>
                <textarea  cols="100" rows="5" required name="postf"> </textarea>
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

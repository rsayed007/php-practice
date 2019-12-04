<?php

include "inc/header.php";
include "../lib/class.php";

 ?>

 
<div class="container text-center">
  <div class="row">
    <h2>Category</h2> <hr>
    <h4> Select Category for see all question.</h4> <hr>
    <div class="col-sm-12">
      <div class="col-sm-6 col-sm-offset-3">
            <!-- query for show catagory -->
      <?php 
        $query  = "SELECT * FROM category";
        $fire   = $run->conn->query($query);
        if (mysqli_num_rows($fire)>0) {
          $i=1;
          while ($cat = mysqli_fetch_assoc($fire)) {
       ?>
        <a style="padding: 20px 40px;margin: 5px;" href="question.php?catid=<?php echo $cat['id'] ?> " class="btn btn-info" ><?php echo $cat['cat_name']; ?></a>
      <?php $i++;} ?>
    <?php } ?>
      </div>
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

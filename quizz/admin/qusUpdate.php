<?php

include "inc/header.php";
include "../lib/class.php";

 ?>

<?php 
  $category=$run->categoryShow();
?>
<!-- Data show in from -->
<?php 
  if (isset($_GET['upd'])) {
    $upd_id   = $_GET['upd'];
    $query    = "SELECT * FROM question WHERE id=$upd_id ";
    $fire     = $run->conn->query($query);
    $data     = mysqli_fetch_assoc($fire);
/*    echo $upd_id;
*/  }
 ?>
 <!-- update Question -->
<?php 
  if (isset($_POST['update'])) {
    $question = $_POST['question']; 
    $ans1      = $_POST['ans1']; 
    $ans2      = $_POST['ans2']; 
    $ans3      = $_POST['ans3']; 
    $ans4      = $_POST['ans4']; 
    $ans      = $_POST['ans']; 
    $cat_id   = $_POST['cat_id'];

    $array=[$ans1,$ans2,$ans3,$ans4];
    $answer =array_search($ans,$array);

    $query    = "UPDATE question SET question='$question', ans1='$ans1', ans2='$ans2',ans3='$ans3', ans4='$ans4', ans='$answer', cat_id='$cat_id' WHERE id=$upd_id ";
    $fire = $run->conn->query($query);
    if ($fire) {
      header('Location: question.php?catid='.$cat_id);
      echo "Question Update ";
    }
  }


 ?>

    <div class="col-sm-6 col-sm-offset-3 main">
      <h1 class="page-header text-center">Update Question</h1>
        <form method="post" action="">
          <div class="form-group">
            <label for="text"><h3>Question</h3></label>
            <input type="text" class="form-control" name="question"  value="<?php echo $data['question']; ?>" required >
          </div>

          <div class="form-group">
            <label for="text">option-1</label>
            <input type="text" class="form-control"  name="ans1"  value="<?php echo $data['ans1']; ?>" required >
          </div>
          <div class="form-group">
            <label for="text">option-2</label>
            <input type="text" class="form-control" name="ans2"  value="<?php echo $data['ans2']; ?>" required >
          </div>
          
          <div class="form-group">
            <label for="text">option-3</label>
            <input type="text" class="form-control"  name="ans3"  value="<?php echo $data['ans3']; ?>" required >
          </div>
          
          <div class="form-group">
            <label for="text">option-4</label>
            <input type="text" class="form-control"  name="ans4"  value="<?php echo $data['ans4']; ?>" required >
          </div>
          <div class="form-group">
            <label for="text">answer</label>
            <input type="text" class="form-control" name="ans" id="ans" value="<?php echo $data['ans']; ?>"" required >
          </div>
          <div class="form-group">
               
               <select class="form-control" id="sel1" name="cat_id">
               
                <option value="" disabled>choose category</option>
                <?php
                  foreach($category as $c)
                  {
                    echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                  }
                ?>                
              </select>
          </div>
          <button type="submit" name="update" id="update" class="btn btn-default">Submit</button><br>
        </form>
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

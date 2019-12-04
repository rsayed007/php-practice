<?php
include "inc/header.php";
include "../lib/class.php";
$cat=new user();
$category=$cat->categoryShow();
//print_r($category); 
?>



        <div class="col-sm-8 col-sm-offset-3 main">
          <div class="main2">
          <a class="pull-right btn btn-success" href="qfile2.php">Upload Question File</a>
          <h1 class="page-header text-center">Add Question</h1>

              			<?php
              			if(isset($_GET['msg']) && !empty($_GET['msg']))
              			{
              				echo '<div class="alertLog alert alert-info alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center><strong>Successfully</strong>  add your Question..</center>
                </div>';
              			}
              			
              			?>
  				  <form method="post" action="add_quiz.php">
    					<div class="form-group">
    					  <label for="text"><h3>Question</h3></label>
    					  <input type="text" class="form-control" name="qus"  placeholder="Enter question" required >
    					</div>

    					<div class="form-group">
    					  <label for="text">option-1</label>
    					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1" required >
    					</div>
    					<div class="form-group">
    					  <label for="text">option-2</label>
    					  <input type="text" class="form-control" name="op2"  placeholder="Enter option-2" required >
    					</div>
    					
    					<div class="form-group">
    					  <label for="text">option-3</label>
    					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3" required >
    					</div>
    					
    					<div class="form-group">
    					  <label for="text">option-4</label>
    					  <input type="text" class="form-control"  name="op4" id="op4" placeholder="Enter option-4" required >
    					</div>
    					<div class="form-group">
    					  <label for="text">answer</label>
    					  <input type="text" class="form-control" name="ans" id="ans" placeholder="Enter answer" required >
    					</div>
    					<div class="form-group">
    						   
    						   <select class="form-control" id="sel1" name="cat">
    						   
                    <option value="" disabled>choose category</option>
    								<?php
      								foreach($category as $c)
      								{
      									echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
      								}
    								?>								
    						  </select>
    					</div>
    					<button type="submit" class="btn btn-info btn-lg col-sm-10 col-sm-offset-1">Submit</button><br>
  				  </form>
          </div>
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

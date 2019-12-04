<!-- test2.php -->
<?php
include "inc/header.php";
include "../lib/class.php";
include "../lib/Formet.php";

$fm = new formet();

$cat=new user();
$category=$cat->categoryShow();
//print_r($category); 
  require_once 'ExcelClasses/PHPExcel.php';
  /*PHP Excel object*/
  $excel = new PHPExcel();

?>




        <div class="col-sm-8 col-sm-offset-3 main">
          <div class="main2">
            <h1 class="page-header text-center">Add Question (file)</h1>
            <br>
            <?php 
              if (empty($_FILES)) {?>
                    <form method='post' enctype='multipart/form-data' action='qfile.php' >
                      <input type='file' name='excel' required >
                      <br>
                      <button type='submit' class=" btn btn-success"> fetch data</button>
                    </form>
              <?php }else{?>

        <?php 
        if (isset($_POST['submit'])) {
          $question   = $_POST['question'];
          $option_1   = $_POST['option_1'];
          $option_2   = $_POST['option_2'];
          $option_3   = $_POST['option_3'];
          $option_4   = $_POST['option_4'];
          $ans        = $_POST['answer'];


          $array        =[$option_1,$option_2,$option_3,$option_4];
          $answer       =array_search($ans, $array);
          $category_id  = $fm->validation($_POST['category']);

          $query    ="INSERT INTO question() VALUES($question','$option_1','$option_2','$option_3','$option_4','$answer','$category_id')";
          $fire     =$run->conn->query($query)or die("cannot insert data in datbase".mysqli_error($this->con));

          if ($fire) {
            header("Location:qfile3.php");
          }else{
            echo "Somthing Wrong";
          }
          
        } ?>

                    <form method="post" action="" name="fileRead">
                      <table class="table table-hover table-bordered">
                        
                        <thead><hr>
                          <tr>
                            <th>Question</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>Answer </th>
                            <th>Category </th>
                          </tr>
                        </thead>
                        <?php 

                          /*Load excel file*/
                          /*Change filename to tamp_name of upload file*/
                          $excel = PHPExcel_IOFactory::load($_FILES['excel']['tmp_name']);

                          /*Selecting Active sheet*/
                          $excel->setActiveSheetIndex(0);

                            $i=3;
                            while($excel->getActiveSheet()->getCell('A'.$i)->getValue() !="" ){
                              $question   =  $excel->getActiveSheet()->getCell('A'.$i)->getValue();
                              $option_1   =  $excel->getActiveSheet()->getCell('B'.$i)->getValue();
                              $option_2   =  $excel->getActiveSheet()->getCell('C'.$i)->getValue();
                              $option_3   =  $excel->getActiveSheet()->getCell('D'.$i)->getValue();
                              $option_4   =  $excel->getActiveSheet()->getCell('E'.$i)->getValue();
                              $answer     =  $excel->getActiveSheet()->getCell('F'.$i)->getValue();
                              $category   =  $excel->getActiveSheet()->getCell('G'.$i)->getValue();
                          ?>
                        <tbody>
                          <tr>
                              <td type="text" name="question" ><?php   echo $question; ?></td>
                              <td type="text" name="option_1"><?php   echo $option_1; ?></td>
                              <td type="text" name="option_2"><?php   echo $option_2; ?></td>
                              <td type="text" name="option_3"><?php   echo $option_3; ?></td>
                              <td type="text" name="option_4"><?php   echo $option_4; ?></td>
                              <td type="text" name="answer"  ><?php   echo $answer;   ?></td>
                              <td type="text" name="category"><?php   echo $category; ?></td>
                          </tr>

                        <?php $i++;}?>
                      <?php } ?>
                        <button type="submit" name="submit" class="btn btn-success pull-right">Save Your Question</button>
                        </tbody>
                      </table>
                    </form>
           </div>
        </div>

<!-- ******************* -->

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

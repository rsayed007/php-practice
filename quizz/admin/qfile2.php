
<!-- test2.php -->
<?php 
/*  include "inc/header.php";
*/  require_once 'ExcelClasses/PHPExcel.php';
  include "../lib/class.php";
  /*PHP Excel object*/
  $excel = new PHPExcel();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dashboard.css" >

  
</head>
<body class="bg-info">
    <div class="container-fluid">
      <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header text-center">Add Question (file)</h1>
        <br>

          <?php 

           $msg='';

           if (empty($_FILES)) {?>
            <form class="col-sm-6 col-sm-offset-3"
            style="background: #eaf8ff;
            padding: 20px;
            border: 1px solid;
            border-radius: 10px;
            padding-bottom: 40px;" 
             method='post' enctype='multipart/form-data' action='qfile2.php' >
                                <input type='file' name='excel' required >
                                <br>
                                <button type='submit' class=" btn btn-success"> fetch data</button>
                              </form>
                        <?php }
                        else{?>

          <form class="col-sm-10 col-sm-offset-1 " 
          style="background: #eaf8ff;
            padding: 20px;
            border: 1px solid;
            border-radius: 10px;
            padding-bottom: 40px;" 
            action="" method="POST" class="">
            
          <br><br>
            <table class="" >
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
                  $ques  =  $excel->getActiveSheet()->getCell('A'.$i)->getValue();
                  $op1   =  $excel->getActiveSheet()->getCell('B'.$i)->getValue();
                  $op2   =  $excel->getActiveSheet()->getCell('C'.$i)->getValue();
                  $op3   =  $excel->getActiveSheet()->getCell('D'.$i)->getValue();
                  $op4   =  $excel->getActiveSheet()->getCell('E'.$i)->getValue();
                  $ans   =  $excel->getActiveSheet()->getCell('F'.$i)->getValue();
                  $cat   =  $excel->getActiveSheet()->getCell('G'.$i)->getValue();
              ?>
                <tbody>
                  <td><input type="text" name="ques[]" value="<?php echo $ques; ?>" ></td>
                  <td><input type="text" name="op1[]" value="<?php echo $op1; ?>" ></td>
                  <td><input type="text" name="op2[]" value="<?php echo $op2; ?>" ></td>
                  <td><input type="text" name="op3[]" value="<?php echo $op3; ?>" ></td>
                  <td><input type="text" name="op4[]" value="<?php echo $op4; ?>" ></td>
                  <td><input type="text" name="ans[]" value="<?php echo $ans-1; ?>" ></td>
                  <td><input type="text" name="cat[]" value="<?php echo $cat; ?>" ></td>
                </tbody>
              <?php $i++;
          }

              ?>
            </table>
                <br><input onclick="myFunction()" class="btn-success" type="submit" name="submit" value="Submit ">
          </form>
           <?php        /* echo $i-3;*/
           } ?>


          <?php
              error_reporting(0);
          
          if (isset($_POST['submit'])) {
            $ques      = $_POST['ques'];
            $op1       = $_POST['op1'];
            $op2       = $_POST['op2'];
            $op3       = $_POST['op3'];
            $op4       = $_POST['op4'];
            $ans       = $_POST['ans'];
            $cat       = $_POST['cat'];
            for ($j=0; $j <10; $j++) { 
            
            $query    ="INSERT INTO question VALUES('','".$_POST['ques'][$j]."','".$_POST['op1'][$j]."','".$_POST['op2'][$j]."','".$_POST['op3'][$j]."','".$_POST['op4'][$j]."','".$_POST['ans'][$j]."','".$_POST['cat'][$j]."')";
            if (empty($_POST['op1'][$j]) && empty($_POST['op2'][$j])) {
            break;
          }
            $fire     =$run->conn->query($query)or die("cannot insert data in datbase".mysqli_error($run->conn));
            if ($fire) {
              
            }else{
              echo "Somthing Wrong";
            }
            }
              $msg= '<div class="alert alert-info alert-dismissible">
  <strong>Success!</strong> Question successfully submited.
</div>';
          }
          ?>
      </div>

    </div>
  </div>
  <div class="col-sm-offset-3 col-sm-6 text-center">
    <?php echo $msg; ?>
    <a href="index.php" class="btn btn-success">Go back Home</a>

  </div>
 
</body>
</html>




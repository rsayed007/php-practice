<?php 
  include 'inc/header.php';
  include 'lib/class.php';


/* Check login */
if ($_SESSION['email']=="") {
  $run->url("index.php");
}

?>
 
<!-- Heading -->
<section id="heading" class="">
  <div class="container-fluid content-padding">
    <div class="row section-heading">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
          <?php
        if(isset($_GET['question']) && !empty($_GET['question'])){
            $cat = $_GET['question'];
            $questiontitle = $run->questionName($cat);

          }           
            
          ?>
            <h1 class="heading_text text-uppercase"> Question about <?php  echo '<div class="text-center text-info">'.$questiontitle.'</div>';?></h1>
      </div>
      <div class="col-md-4">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
<!--               <li class="breadcrumb-item"><a href="subject.html">quiz list</a></li>
 -->              <li class="breadcrumb-item">quiz </li>
            </ol>
      </div>
    </div>
  </div>
</section>
<!--End Heading -->
      <h2><div class="time" id='time'>Time left </div></h2>




<?php
  if(isset($_GET['question']) && !empty($_GET['question'])){
    $cat = $_GET['question'];
    $run->qustionShow($cat);
    $run->qus;
    $_SESSION['cat'] = $cat;
  } 
  else{
    header("Location: subject.php");
  }
/*  print_r ($run->qus);*/
?>



<div class="container" >
  <h2></h2>
  <center><p></p> </center>
  <div class="col-sm-2"></div>          
  <div class="col-sm-8 tableBacg">
    <div class="row"> 
        <?php 
          $i=1;
          if(!empty($run->qus))
          foreach ($run->qus as $qust) {?>
          <form method="post" id="form1" action="answer.php">
            <table class="table table-hover table-bordered ">
              <thead>
                <tr class="info">
                  <th > <?php echo $i; ?> &emsp; <?php echo $qust['question']; ?> </th>
                </tr>
              </thead>
              <tbody>
                <?php if (isset($qust['ans1'])) { ?>
                <tr>
                  <td> <input type="radio" value="0" name="<?php echo $qust['id'];?>"/>&emsp;&emsp; <?php echo $qust['ans1']; ?></td>
                </tr>
              <?php } ?>
              <?php if (isset($qust['ans2'])) { ?>
                <tr>
                  <td> <input type="radio" value="1" name="<?php echo $qust['id'];?>"/>&emsp;&emsp; <?php echo $qust['ans2']; ?></td>
                </tr>
              <?php } ?>
              <?php if (isset($qust['ans3'])) { ?>
                <tr>
                  <td> <input type="radio" value="2" name="<?php echo $qust['id'];?>"/>&emsp;&emsp; <?php echo $qust['ans3']; ?></td>
                </tr>
              <?php } ?>
              <?php if (isset($qust['ans4'])) { ?>
                <tr>
                  <td> <input type="radio" value="3" name="<?php echo $qust['id'];?>"/>&emsp;&emsp; <?php echo $qust['ans4']; ?></td>
                </tr>
              <?php } ?>
             <!--  <tr>
                  <td>Ans: <input type="radio" />&emsp;&emsp; Option <?php echo 1+$qust['ans']; ?></td>
                </tr> -->
              <tr>
                  <td><input type="radio" checked="checked" style="display: none;" value="no_ans" name="<?php echo $qust['id'];?>"/></td>
              </tr>
              </tbody>
            </table>
         <?php $i++; }  ?>

<!-- for Question ID -->
         <!--  -->
           <?php 
          $i=1;
          if(!empty($run->qus))
          foreach ($run->qus as $qust) {?>
           <input type="text" name="Question_Id[]" id="name" style=" display: none;" class="" value="<?php echo $qust['id']; ?>"   ><br>
        <?php $i++; }  
         else{ 
            header("Location:123.php");
            } ?>

        <center><button class="btn  btn-primary btn-block" name="submit" id="form1" type="submit">Submit Quiz</button></center>
      </form>
    </div>
  </div>
</div>

 <script type="text/javascript">
      /*var timeLeft=1*60;*/var timeLeft=<?php echo $z=$i-1;?>*60;
  </script>

  <script type="text/javascript">
  function timeout()
  {
    var minute=Math.floor(timeLeft/60);
    var second=timeLeft%60;
    var mint=checktime(minute);
    var sec=checktime(second);
    if(timeLeft<=0)
    {
      clearTimeout(tm);
      alert("Times Up \n prass ok");
      document.getElementById("form1").submit();
    }
    else
    {
      document.getElementById("time").innerHTML=mint+":"+sec;
    }
    timeLeft--;
    var tm= setTimeout(function(){timeout()},1000);
  }
  function checktime(msg)
  {
    if(msg<10 && msg!=0)
    {
      msg="0"+msg;
    }
    return msg;
  }
  </script>





<?php 
echo "<br><br>";
  include 'inc/footer.php';
?>


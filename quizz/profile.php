<?php 
  include 'inc/header.php';
  include 'lib/class.php';
  $email = $_SESSION['email'];
  $run->userProfile($email);

  $result = $run->resultShow($email); 
/*  var_dump(  $result);
*/  

/* Check login */
if ($_SESSION['email']=="") {
  $run->url("index.php");
}

?>


<!-- Heading -->
<section id="heading" class=""><br><br><br><br>
  <div class="container-fluid content-padding">
    <div class="row section-heading">
      <div class="col-md-4"></div>
      <div class="col-md-4">
            <h1 class="heading_text text-uppercase" style="padding-left: 77px;">User Profile</h1>
      </div>
      <div class="col-md-4">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Profile </li>
            </ol>
      </div>
    </div>
  </div>
</section>
<!--End Heading -->


<div class="card">
  <?php 
  foreach ($run->data as $profile) { ?>

    <img src="img/<?php echo $profile['img'] ?> " alt="User Photo" style="width:100%;border: 4px solid;">
    <h1><?php echo $profile['name']; ?></h1>
    <p class="title"><?php echo "<span class='fa fa-envelope' aria-hidden='true'></span> ".$profile['email']; ?></p>
    <p><?php echo "<span class='fa fa-phone' aria-hidden='true'></span> ".$profile['phone']; ?> <hr> </p>

  <?php } ?>
</div>
<hr><hr>

<!-- result start -->
<div class="container ">
  <div class="row">
    <h2>Your Result</h2>
    <div class="col-sm-12">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 profile">
        <table class="table table-striped table-bordered table-hover">
          <tr>
            <th>S.N</th>
            <th>Quiz Topic</th>
            <th>Total Quiz</th>
            <th>Correct Answer</th>
            <th>Wrong Answer</th>
            <th>No Answer</th>
            <th>Total Mark</th>
          </tr>
          <?php  

            $i=1;
            if(!empty($result))
            foreach ($result as $results) {   ?>
                
            <tr>
                <?php    
                  $total = 10 ;       
                  $right = $results['right_ans'];
                  $wrong = $total - ($results['no_ans']+$results['right_ans']);
/*                  $total = $right + $wrong;
*/                 ?>

              <td><?php echo $i; ?></td>
              <td><?php echo  $run->questionName($results['cat_id']); ?></td>
              <td><?php echo $total; ?></td>
              <td><?php echo $results['right_ans']; ?></td>
              <td><?php echo $wrong; ?></td>
              <td><?php echo $results['no_ans'];?></td>
              <td><?php echo $results['right_ans']; ?></td>
            </tr>
        <?php $i++; }
              else{?>
                <tr>
                  <td colspan="7" class="text-center">
                    <h2 class="text-muted text-danger">You have not saved any Result <br>or<br>You did not complete any Exam</h2>
                  </td>
                </tr>
             <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Profile end -->



<?php 
  include 'inc/footer.php';
?>
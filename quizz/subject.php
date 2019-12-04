<!-- subject.php -->
<?php

include "inc/header.php";
include "lib/class.php";

/* Check login */
if ($_SESSION['email']=="") {
  $run->url("login.php");
}
 ?>

 
<div class="container text-center" style="height: 50vh;">
  <div class="row">
    <h2>Select Your Subject</h2>
    <p>Select a subject for justify yourself. <br> If you agree with our <a href="#">tram & condition</a> (select from lists):</p><hr>
    <div class="col-sm-12">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
            <!-- query for show catagory -->
      <?php 
        $query  = "SELECT * FROM category";
        $fire   = $run->conn->query($query);
        if (mysqli_num_rows($fire)>0) {
          $i=1;
          while ($cat = mysqli_fetch_assoc($fire)) {
       ?>
        <a style="padding: 20px 40px;margin: 5px;" id="info" 
                onclick ="return confirm('information about the exam \n \n 1--> you get 1 minute per question \n 2--> after finish time automatically submit your answer \n 3--> no negative marking \n      if you press the ok button your exam time will start. ');" 

        href="qus_show.php?question=<?php echo $cat['id'] ?> " class="btn btn-info" ><?php echo $cat['cat_name']; ?></a>
      
      <?php $i++;} ?>
    <?php } ?>
    <hr>
      </div>
    </div>
  </div>
</div> 

<!-- information alert   -->
<script type="text/javascript">
  function info()
  {
    
  }
</script>

<!-- information alert end -->


<?php 
echo "<br><br>";
  include 'inc/footer.php';
?>
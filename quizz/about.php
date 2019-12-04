<?php 
  include 'inc/header.php';
  include 'lib/class.php';

/* Check login */
if ($_SESSION['email']=="") {
  $run->url("index.php");       // run object of " user "calss
}
?> 

<!-- About Us part -->
  <div id="aboutus" class="container content-padding">
    <?php 
        $query = "select * from about";
        $post = $run->select($query);
        if ($post) {
          while ($result = $post->fetch_assoc()) {
    ?>
    
    <div class="row">
      <h2 class="text-center"></h2>
    
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <img class="img-responsive about-img " src="img/<?php echo $result['img']; ?>" alt="Alpha image">
      </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <h3><?php echo $result['header']; ?></h3>
        <p class="text-justify"> <?php echo $result['description']; ?></p>
    </div>
    <?php } ?> <!-- end whele loop -->
  <?php } else{ echo " ";} ?>
  </div>

<?php 
  include 'inc/footer.php';
?>
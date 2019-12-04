<?php 
  include 'inc/header.php';
  include 'lib/class.php';

/* Check login */
if ($_SESSION['email']=="") {
  $run->url("index.php");
}
if(isset($_POST['submitQ'])){
  if(isset($_POST['cat'])){
    $question = $_POST['cat'];
    header("Location: qus_show.php?question=$question");
  }
  else{
    $message = "Select Question";
  }
}
?>
<!-- Heading -->
<section id="heading" class="">
  <div class="container-fluid content-padding">
    <div class="row section-heading">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
            
      </div>
      <div class="col-md-4">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">php quiz list</li>
            </ol>
      </div>
    </div>
  </div>
</section>
<!--End Heading -->

<!-- Question start -->

<div class="container col-sm-12 text-center" >
  <div class="col-sm-3"></div>
  <div class="col-sm-6 text-center element">
    <h2>Select Your Subject</h2>
    <p>Select a subject for justify yourself. If you agree with our <a href="#">tram & condition</a> (select from lists):</p>
    <div class="col-sm-3"></div>
    <form class="col-sm-6" method="post" action="subject.php">
      <div class="form-group ">
        <label for="sel1">Select list (select one):</label>
        <select class="form-control selectpicker" multiple  id="sel1" name="cat">
          <!-- <option >Select subject</option> -->
        <?php 
            $run->categoryShow();
            foreach ($run->cat as $category) {
        ?>
          <option class="alert alert-success" value="<?php echo $category['id'];?>"><?php echo $category['cat_name']; ?></option>

        <?php } ?>
        </select> 
        <br>
        <center><button onclick="myFunction()" class="btn btn-primary" type="submit" value="submit" name="submitQ" >Submit</button></center>
<script>
function myFunction() {
    alert("Hello! I am an alert box!");
}
</script>
    </form>
  </div>
</div>
<!-- Question end -->



<!-- Contact us part -->
<div  id ='contactus' class="container-fluid contact-us content-padding">
  <div class="row">

  </div>
</div>
<!--Ene Contact us part -->

<?php 
echo "<br><br>";
  include 'inc/footer.php';
?>
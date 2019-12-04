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

<div class="container" >
  <h2></h2>
  <center><p></p> </center>
  <div class="col-sm-2"></div>          
  <div class="col-sm-8 tableBacg">
    <div class="row"> 
      <form method="post" id="" action="subject.php">
            <h2 class="text-muted text-center text-warning">You have answered all the questions about this topic. Please Return and select another topic   </h2> <br><br>
            <center><button type="Submit" value="Submit Quiz" class="btn btn-danger btn-block">Go Back</button></center>
      </form>
    </div>
  </div>
</div>

 
<?php 
echo "<br><br>";
  include 'inc/footer.php';
?>




?>
<?php 
  include 'inc/header.php';
  include 'lib/class.php';



  /* Check Session */
if (isset($_SESSION['email']) && $_SESSION['email'] != NULL) {
  $run->url("index.php");
}
?>


<br><br>
<div class="col-sm-6 col-sm-offset-3 form-degine">
      <center><h1>Sign Up Form</h1></center>
      <br><br>
      <center>
        <?php 
          if (isset($_GET['msg'])) {
            echo '<div class="alert alert-danger"><strong>Error !!!</strong> You have already an account try another email !!!</div>';
          }
        ?>
      </center>
      
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="reg_submit.php">
          <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="phone">Phone:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-4">          
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2"></div>
            <label class="control-label col-sm-2" for="img">Your Image:</label>
            <div class="col-sm-4">
              <input type="file" class="form-control-file" id="img"  name="img" required>
            </div>
          </div>
<!--           <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-offset-2 col-sm-4">
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
              </div>
            </div>
          </div> -->
          <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-offset-2 col-sm-4">
              <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
          <div>
            <div class="col-sm-4"></div>
            <p>if you alrady register, go for <b> <a href="login.php">login</a></b> </p>
          </div>
        </form>
</div>
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
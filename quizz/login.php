<?php 
  include 'inc/header.php';
  include 'lib/class.php';




  /* Check Session */
if (isset($_SESSION['email']) && $_SESSION['email'] != NULL) {
  $run->url("index.php");
}

?> 


<br><br><br><br>
<div class="col-sm-6 col-sm-offset-3 form-degine">

<center><h1>Login Form</h1></center>
<br><br>
      <center>
        <?php 
          if (isset($_GET['err'])) {
            echo "<p>Data dose not match :(</p>";

          }
        ?>
      </center>
<form class="form-horizontal" method="post" action="log_submit.php">
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
      <div class="col-sm-offset-2 col-sm-4">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-2"></div>
      <div class="col-sm-offset-2 col-sm-4">
        <input type="submit" name="submit" value="Submit" class="btn btn-default"></input>
      </div>
    </div>
    <br><br><br><br>
    <div>
      <div class="col-sm-4"></div>
      <p>if you not register, please <b> <a href="signup.php">register </a></b>hear</p>
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
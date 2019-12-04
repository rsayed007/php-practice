<?php 

  include 'lib/class.php';
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz WhizZ</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style-log.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
	<script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custome.js"></script>
	<script src="js/mixitup.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-inverse navbar-fixed-top" id="nav-top">
	  <div class="container">
	    <div class="navbar-header">
	    	<a href="" class="navbar-brand"><img src="img/logo1.png" width="20%"></a>
	    	<button class="navbar-toggle" data-toggle="collapse" data-target="#nav">
	    		<span class="icon-bar"></span>
	    		<span class="icon-bar"></span>
	    		<span class="icon-bar"></span>
	    	</button>
	    </div>
	    <div class="collapse navbar-collapse" id="nav">
    		<ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Log out</a></li>
          <li><a href="#" class="">
            <span class="glyphicon glyphicon-user"> User </a>
          </li>
        </ul>
		  </div>
	  </div>
	</nav>

<!-- Heading -->
<section id="heading" class="">
  <div class="container-fluid content-padding">
    <div class="row section-heading">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
            <h1 class="heading_text text-uppercase">PHP OOP qustion</h1>
      </div>
      <div class="col-md-4">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">oop quiz </li>
            </ol>
      </div>
    </div>
  </div>
</section>
<!--End Heading -->
      <div class="time">
        <h2>Time left</h2>
      </div>
      <?php 

        $query = "select * from question where cat_id='$question'";
        $fire= $run->conn->query($query);
        $c = mysqli_num_rows($query);
        $rand = rand(0, $c) - 4;
        echo $c;
        echo $rand;

    $show = $run->conn->query("select * from question where cat_id ='$question' and id >'$rand' LIMIT 4");
    while ($row=$show->fetch_array(MYSQLI_ASSOC)){
      $run->qus[]=$row;
    }
    return $run->qus;  
  



       ?>
<!-- Question start -->
<section class="container  Quiz-list well-sm">
  <div class="row">
    <div class="col-md-12">
      <h1>Modder horof koita? <hr> </h1>
        <label class="container containerQ">5
          <input type="radio" checked="checked" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="container containerQ">8
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="container containerQ">3
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="container containerQ">4
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
		  Submit
		</button>
    </div>
  </div>
  

   <footer  class="footer">
     <div class="footer-inner text-center">
       <p><a href=""><span class="fa fa-facebook fa-2x"></span></a></p>
   	   <p><a href=""><span class="fa fa-twitter fa-2x"></span></a></p>
   	   <p><a href=""><span class="fa fa-google fa-2x"></span></a></p>
   	   <p><a href=""><span class="fa fa-linkedin fa-2x"></span></a></p>
     </div>


   </footer>


</body>	
</html>
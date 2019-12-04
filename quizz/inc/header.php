<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once $filepath.'/../lib/session.php';
	Session::initial();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Quiz WhizZ</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	  <link rel="stylesheet" href="animate/animate.css" >





	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
	<script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custome.js"></script>
	<script src="js/test.js"></script>
<!-- 	<style type="text/css">
		.hiddenclass{
   display:none;
}
	</style> -->
		<link rel="stylesheet" href="css/c/slider.css">

		<link rel="stylesheet" href="css/style.css">
</head>
<?php 
	if (isset($_GET['action'])&& $_GET['action']=="logout") {
		Session::destroy();
	}
?>

<body onload="timeout()" data-spy="scroll" data-target=".navbar" data-offset="50" >
	<div class="container ">
		<div class="row ">
			<div class="col-sm-8"></div>
			<div class=" nav-top col-sm-4 " >
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile.php" class="">
						<!-- user name -->
						<?php 
		          		$name=Session::get("email");
		          		
		          		if($name==""){
		          			echo "user ";
		          		}elseif(isset($name)){
		          			echo $_SESSION['name']; 
		          		}
		          		?>
	                	<span class="glyphicon glyphicon-user"></span></a>
	                </li>
	                	<!-- hide login && logout from nav -->
			         <?php 
					if ($name=="") {
					?>
						<li><a href="login.php">Login</a></li>
					<?php } else { ?>
						<li><a href="?action=logout">Log out</a></li>
					<?php } ?> 
				</ul>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-inverse navbar-fixed-top sticky-top" id="nav-top">
	  <div class="container">
	    <div class="navbar-header">
	    	<a href="index.php" class="navbar-brand"><img src="img/logo1.png" width="20%"></a>
	    	<button class="navbar-toggle" data-toggle="collapse" data-target="#nav">
	    		<span class="icon-bar"></span>
	    		<span class="icon-bar"></span>
	    		<span class="icon-bar"></span>
	    	</button>
	    </div>
	    <div class="collapse navbar-collapse" id="nav">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
      		<li id="send"><a href="subject.php">Subject</a></li>
      		<li><a href="about.php">About us</a></li>
			<li><a href="game.php">Game</a></li>
		</ul>
		</div>
	  </div>
	</nav>
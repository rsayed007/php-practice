<?php 
  session_start();
  if ($_SESSION['login']) {
    $username=$_SESSION['nameAdmin'];
  }else{
    header('Location:login.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <title> Quizz Dashboard</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body class="bg-info ">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Quiz Whizz</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="inbox.php">Inbox</a></li>
            <li "><a href="#">Welcome <span style="color: red;"><?php echo $username; ?></span> </a></li>
            <li><a href="#">Help</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <h4>Question</h4>
          <ul class="nav nav-sidebar">
            <li class=""><a href="index.php">Add Question <span class="sr-only">(current)</span></a></li>
            <li><a href="catshow.php">See Question </a></li>
            <li><a href="add_cat.php">Add Category </a></li>
<!--             <li><a href="#">Disable Category </a></li>
 -->          </ul>
          <h4>Home </h4>
          <ul class="nav nav-sidebar">
            
            <li><a href="">BG Image</a></li>
            <li><a href="teacher.php">Ouer Teacher</a></li>
            <li><a href="feedback.php">Feedback</a></li>
          </ul>
          <h4>Footer</h4>
          <ul class="nav nav-sidebar">
            <li><a href="">Social link</a></li>
            <li><a href="">Tytle</a></li>
          </ul>
        </div> 
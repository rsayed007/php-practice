<?php

  include "inc/header.php";
  include "lib/class.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WordBeater</title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body class="bg-success text-white " style="background: #515551;color: #fff;">
  <header class=" text-center " style="margin-bottom: 50px;">
    <h1>Typing Battle</h1>
  </header>
  <div class="container text-center">

    <!-- Word & Input -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 mx-auto">
        <p class="lead">Type The Given Word Within
          <h1><span class="text-info" id="seconds">5</span></h1> Seconds:</p>
        <h1 style="font-size: 50px; color: #fff;" class="" id="current-word">hello</h1>
        <input type="text" class="form-control form-control-lg" placeholder="Start typing..." id="word-input" autofocus>
        <h4 style="margin-top: 70px;" class="mt-3" id="message"></h4>

        <!-- Time & Score Columns -->
        <div class="row ">
          <div class="col-md-6">
            <h3>Time Left:
              <span id="time">0</span>
            </h3>
          </div>
          <div class="col-md-6">
            <h3>Score:
              <span id="score">0</span>
            </h3>
          </div>
        </div>

        <!-- Instructions -->
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-body bg-secondary text-white">
              <h5>Instructions</h5>
              <p>Type each word in the given amount of seconds to score. To play again, just type the current word. Your score
                will reset</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>
</body>

</html>
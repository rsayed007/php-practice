<?php 
  include 'inc/header.php';
  include 'lib/class.php';
?>

<!-- Start home -->

<div style="height: 62vh;">
<!--   <img src="img/1.jpg" height="100%" width="100%">
 -->  <div id="carousel-example-generic"  class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/bg5.jpg" style="height: 62vh; width: 100%;" alt="...">
          <div class="carousel-caption">
            <h2 class="animated zoomIn" style="animation-delay: 1s;">justify yourself</h2>
            <h3 class="animated zoomIn" style="animation-delay: 2s;" >With Quiz Whizz students can give the exam online any time any where and user can justify yourself</h3>
          </div>
        </div>
        <div class="item">
          <img src="img/bg31.png" style="height: 62vh; width: 100%;" alt="...">
          <div class="carousel-caption">
            <h2 class="animated zoomIn" style="animation-delay: 1s;">justify yourself</h2>
            <h3 class="animated zoomIn" style="animation-delay: 2s;">With Quiz Whizz students can give the exam online any time any where and user can justify yourself</h3>
          </div>
        </div>
        <div class="item">
          <img src="img/bg6.jpg" style="height: 62vh; width: 100%;" alt="...">
          <div class="carousel-caption">
            <h2 class="animated slideInDown" style="animation-delay: 1s;">justify yourself</h2>
            <h3 class="animated slideInRight" style="animation-delay: 2s;">With Quiz Whizz students can give the exam online any time any where and user can justify yourself</h3>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      <!-- slider End -->
</div>

<!-- text carosol end -->
<!-- Portfolio part -->

    <div id="portfolio" class="container-fluid content-padding portfolio">
       <div class="row section-heading">
        <h2 class="text-center"><strong>Select your course and get started </strong></h2>
        <p>Online Test & Free Mock Tests For Competitive Exams Boost your exam preparation with Testbook to crack the most popular competitive exams in India. Select your course and get started.</p>
       </div>

       <div class="row text-center mix-buttons " ><br>
        <a href="subject.php">
          <button id="send" style="padding: 20px;" type="button" class="btn btn-primary">
            Your Subject
          </button>
        </a>
       </div>
    </div>

   
<!-- Our teachers part -->
      <div id="services" class="container-fluid content-padding services">
    	 <div class="row section-heading">
    	 	<h2 class="text-center "><strong>OUR ADVISOR</strong></h2>
    	 	<p>We learn, We teach, We innovate </p>
    	 </div>
       <?php 
        $query = "select * from teachers";
        $post  = $run->select($query);
        if ($post) {
          while ($result = $post->fetch_assoc()) {
       ?>

    	 	<div class="col-sm-4 mix web">
    	 		<div class=" service-img">
    	 			<img src="img/<?php echo $result['img']; ?>" alt="">
    	 			<h2><?php echo $result['name']; ?></h2>
            <h5><?php echo $result['designation']; ?><br> <?php echo $result['institute']; ?></h5>
    	 		</div>
    	 	</div>

          <?php } ?> <!-- end while loop -->
        <?php } else{ echo "";}?>

    	</div>
    </div>
<!-- text carosol start -->

<div class="container-fluid " id="slider">
  <h2>Why People Love</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
          <?php 
        $i=0;
        $query ="SELECT * FROM feedback";
        $fire  =$run->conn->query($query);
        while ($row = mysqli_fetch_array($fire))
        {?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i++; ?>" >
        </li>
       <?php
       }
      ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role='listbox'>
      <?php 
        $query ="SELECT * FROM feedback";
        $fire  =$run->conn->query($query);
        while ($slide=mysqli_fetch_array($fire))
        {
       ?>

      <div class="item itemtext">
          <p><?php echo $slide['post']; ?></p>
          <p><br><br>
            -<?php echo $slide['name']; ?> <br><?php echo $slide['designation']; ?>
          </p>
      </div>
  <?php } ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control left-controls" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control right-controls" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

<!-- text carosol end -->

<!-- Contact us part --> 
<!-- Contact us part -->
    <div  id ='contactus' class="container-fluid contact-us content-padding">
      <div class="row">
      <h2 class="text-center" style="padding-bottom: 10px;"><strong>Contact Us</strong></h2>
      <p class="text-center"style="padding-bottom: 30px;"><i>Don't Shy To Drop Us A Mail!!</i></p>
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <img src="img/logo1.png" width="250px">
            <hr>
               <h4 class="text-center">justify yourself</h4>
<!--              <p><span class="glyphicon glyphicon-map-marker"></span> ADDRESS : Dhaka, Bangladesh.</p>
              <p><span class="glyphicon glyphicon-envelope"></span> EMAIL : email@admin.com</p> -->
          </div>
          <div class="col-sm-6">
            <div class="row">
              <?php 
              // define variables and set to empty values
              $nameErr = $emailErr = $textErr = $seccess = "";
              $cName = $cEmail =  $text = "";
              $cName_valid = $cEmail_valid =  $text_valid = false;

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $cName  = $_POST['cName'];
                    $cEmail = $_POST['cEmail'];
                    $cText  = $_POST['cText'];

          /*Post Chack*/
                    if (!empty($text)) {
                      if (strlen($text)>3 && strlen($text)<200) {
                        if (!preg_match('/[^a-zA-Z\d_.]/', $text)) {
                          $text_valid = true;
                        }else{
                          $textErr ="This not write formet <br>";
                        }
                      }else{
                        $textErr = "Massege must be between 3 to 15 chars long. <br>";
                      }
                    }

         /* Email chack*/
                    if (!empty($cEmail)) {
                      if (filter_var($cEmail, FILTER_VALIDATE_EMAIL)) {
                        $cEmail_valid = true;
                      }else{
                        $emailErr=$cEmail."is an Invalid Email Address";
                      }
                    }else{
                      $emailErr ="Email can not be Blank !!";
                    }

        /*Name Chack*/
                    if (!empty($cName)) {
                      if (strlen($cName)>3 && strlen($cName)<15) {
                        if (!preg_match('/[^a-zA-Z\s]/', $cName)) {
                          $cName_valid = true;
                        }else{
                          $nameErr ="Fullname can contain only alphabets <br>";
                        }
                      }else{
                        $nameErr = "Fullname must be between 3 to 15 chars long. <br>";
                      }
                    }

                    /*insart data*/
                    if ($cName_valid) {
                      $query  = "INSERT INTO contactus(cName,cEmail,cText) VALUES('$cName','$cEmail','$cText') ";
                      $fire   = $run->conn->query($query);
                      if ($fire) {
                        $seccess = "Post submited, we will connect with you very soon  ";
                      }
                    }


                }
                /*function start*/
                function test_input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
              ?>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <span class="error"> <?php echo $seccess;?></span>
                <div class="form-group">
                   <div class="form-group col-sm-6">
                    <span class="error"> <?php echo $nameErr;?></span>
                    <input class="form-control" type="text" name="cName" id="cName" placeholder="Name">
                   </div>
                   <div class="form-group col-sm-6">
                    <span class="error"> <?php echo $emailErr;?></span>
                    <input  class="form-control" type="email" name="cEmail" id="cEmail" placeholder="Email ">
                   </div>
                   <textarea class="form-group form-control" name="cText" id="cText" cols="30" rows="5" placeholder="write your msg..."  ></textarea>
                   <button class="btn btn-primary" name="submit" id="submit">Submit</button>
                </div>
              </form>
             
          </div>
      </div>
   </div>
        
<!-- Script for slider -->
    <script type="text/javascript">
      $(document).ready(function(e){
        $('.carousel-indicators li:nth-child(1)').addClass('active');
        $('.item:nth-child(1)').addClass('active');
      });
    </script>

<?php 
  include 'inc/footer.php';
?>
<!--    <script>
        $('#nav a').click(function(e){
          e.preventDefault()
          var hash = this.hash;
          var position = $(hash).offset().top;
          $('html').animate({
                scrollTop : position
          },1000);
        })
   </script> -->
<!-- 
 <script>  
 $(document).ready(function(){ 
       window.onload = function check_session()
       {
          $.ajax({
            url:"check_session.php",
            method:"POST",
            success:function(data)
            {
              if(data == '1')
              {
                var r = confirm('You need to login for give Exam\n or \nother feature');  
                if (r==true) {
                  window.location.href="login.php";
                }
              }/*else{
                alert('You are logdin');  
                window.location.href="login.php";
              }*/
              
            }
          })
       }

/*        setInterval(function(){

          check_session();
        }, 2000);*/  //10000 means 10 seconds
       window.onclick = function check_session2()
          {
          $.ajax({
            url:"check_session.php",
            method:"POST",
            success:function(data)
            {
              if(data == '1')
              {
                var r = confirm('You need to login for give Exam or other feature ');  
                if (r==true) {
                  window.location.href="login.php";
                }
              }
            }
          })
          document.getElementById("send").innerHTML = r;
       }
 });  
 </script> -->
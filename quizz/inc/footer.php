
   <footer  class="footer" style="height: 200px;">
    <div class="col-sm-12">
      <div class="footer-inner text-center col-sm-6">
              <h4><i>Quick Contact</i><hr></h4>
              <p><span class="glyphicon glyphicon-phone"></span> PHONE : +8801010101</p><br>
              <p><span class="glyphicon glyphicon-map-marker"></span> ADDRESS : Dhaka, Bangladesh.</p><br>
              <p><span class="glyphicon glyphicon-envelope"></span> EMAIL : email@admin.com</p><br>
     </div>
     <div class="footer-inner text-center col-sm-6">
      <h4 class="text-uppercase footer_header">Social Site</h4><hr>

       <p><a href=""><span class="fa fa-facebook fa-2x"></span></a></p>
       <p><a href=""><span class="fa fa-twitter fa-2x"></span></a></p>
       <p><a href=""><span class="fa fa-google fa-2x"></span></a></p>
       <p><a href=""><span class="fa fa-linkedin fa-2x"></span></a></p>
     </div>
<!--      <div class="footer-inner mask flex-center rgba-green-slight text-center col-sm-4">
       <p><a href=""><span class="fa fa-facebook fa-2x"></span></a></p>
       <p><a href=""><span class="fa fa-twitter fa-2x"></span></a></p>
       <p><a href=""><span class="fa fa-google fa-2x"></span></a></p>
       <p><a href=""><span class="fa fa-linkedin fa-2x"></span></a></p>
     </div> -->
    </div>
   </footer>
       <div class="copyright">
        <h5 class="text-center"> Copyright <?php echo date("Y"); ?> All rights reserved </h5>
       </div>


</body>	
</html>

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("nav");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
</script>
   <script  src="js/index.js"></script>
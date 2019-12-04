<?php

include "inc/header.php";
include "../lib/class.php";

 ?>
  <?php if (!empty(isset($_GET['catid']))){
      $id=$_GET['catid'];
      $questiontitle = $run->questionName($id);
    }
    ?> 
<!-- query for delete question -->
<?php 
  if (isset($_GET['del'])) {
    $del_id = $_GET['del'];
    $query = "DELETE FROM question WHERE id=$del_id";
    $fire = $run->conn->query($query);
    if ($fire) {
      header('Location:catshow.php');
      echo 'Delete Question';
    }
  }

 ?>
 
<div class="container text-center">
  <div class="row">

    <div class="col-sm-10 col-sm-offset-2 form-degine">
      
          <h2>All Question of <?php  echo '<div class="text-center text-info">'.$questiontitle.'</div>';?></h2> <hr>
    <h4> ****************************</h4> <hr>
      <div class="col-sm-2"></div>
      <div class="container col-sm-8 tableBacg">
        <table class="table features_items">

        </table>
      <div class="text-center">
        <ul class="pagination"></ul>
      </div>        
      </div>
    </div>
  </div>
</div>




<!-- footer -->
        </div>
      </div>
    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>


  <script type="text/javascript">
  
  $(document).ready(function(){
    var _id = <?php echo $id ;?> ;
    pagecategory(_id);
    category(_id);
    $("body").on("click","#page_c",function(){
      var pn = $(this).attr("page");
      $.ajax({
        url : "runquery.php",
        method  : "POST",
        data  : {category:_id,setPage:1,pageNumber:pn},
        success : function(data){
          $(".features_items").html(data);
        }
      })
    });     
  });
  function category(_id){
    $.ajax({
      url : "runquery.php",
      method: "POST",
      data: {category: _id},
      success :function(data){
        $(".features_items").html(data);
      }
    })
  } 
  function pagecategory(_id){
    $.ajax({
      url : "runquery.php",
      method: "POST",
      data: {pagecategory:1,categoryId: _id},
      success :function(data){
        $(".pagination").html(data);
      }
    })
  } 
  </script>

  </body>
</html>

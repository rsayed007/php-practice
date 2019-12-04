<?php 
  include 'inc/header.php';
  include 'lib/class.php';

/* Check login */
if ($_SESSION['email']=="") {
  $run->url("index.php"); 	    // run object of " user "calss
}

?>
<hr />

<!-- Query for send Question ID in DAtabase -->
<?php 
    error_reporting(0);

	 if (isset($_POST['submit'])) {

	$msg        ="";
  	$qid     = $_POST['Question_Id'];

    $userEmail = $_SESSION['email'];
  for ($j=0; $j <10; $j++) { 
    $query = "INSERT INTO use_question VALUES('','".$_SESSION['email']."','".$_POST['Question_Id'][$j]."')";

    if (empty($_SESSION['email']) && ($_POST['Question_Id'][$j]==0)) {
            break;
    }
    $fire = $run->conn->query($query) or die("cannot insert data in datbase".mysqli_error($this->con));
    if ($fire) {

    }
  else{
  	header("location:qus_show.php");
      }
 }
}

?>
<!-- End Query for send Question ID in DAtabase -->

<!-- Query for Stor result in DAtabase -->

<?php
if(!isset($_POST['store'])){
	$answer=$run->answer($_POST);
/*	echo "Roman";
*/
}
?>

<div class="container">
  <?php 
  		$total_qus = 10;
  		$wrong_ans = abs($total_qus-($answer['right']+$answer['no_ans']));
  		//$total_qus = $answer['right']+$answer['wrong']+$answer['no_ans'];
	  	$attempt_qus = abs($answer['right']+$wrong_ans);
 { ?>
   	
   	<div class="col-sm-3"></div>
    <div class="col-sm-6">
    <h3>Your test result. </h3>
    <table class="table table-bordered">
		    <thead >
		      <tr class="info">
		        <th>Total Question:</th>
		        <th><?php echo $total_qus;?> </th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>Attempted questions</td>
		        <td><?php echo $attempt_qus; ?></td>
		      </tr>
		      <tr>
		        <td>Right answer</td>
		        <td><?php echo $answer['right']; ?></td>
		      </tr>
		      <tr>
		        <td>Wrong answer</td>
		        <td><?php echo $wrong_ans; ?></td>
		      </tr>
		      <tr>
		        <td>No answer</td>
		        <td><?php echo $answer['no_ans']; ?></td>
		      </tr>
		      <tr>
		        <td>Progress</td>
		        <td><?php 
		        $progress=($answer['right']*100)/($total_qus);
		        echo $progress."%"; ?></td>
		      </tr>
		    </tbody>
	  	</table>
	</div>
  <?php } ?>
</div>
<!-- insatr data use question table -->



<?php
/* Start coding for store database */
if(isset($_POST['store'])){
	if($_POST['store'] == 'Yes'){
		$student_id = $_SESSION['email'];
		$sub_cat_id = $_SESSION['email'].'_'.$_SESSION['cat'];
		$cat_id = $_SESSION['cat'];
		$right_ans = $_POST['right_ans'];
		$wrong_ans = $_POST['wrong_ans'];
		$no_ans = $_POST['no_ans'];
		$inserts = "INSERT INTO result (student_id, sub_cat_id, cat_id, right_ans, wrong_ans, no_ans) VALUES ('$student_id', '$sub_cat_id','$cat_id', '$right_ans', '$wrong_ans', '$no_ans')";
		if($run->register($inserts)){
			$run->url('profile.php?msg=Data Stored');
		}else{
			$updats = "UPDATE result SET right_ans='$right_ans', wrong_ans='$wrong_ans', no_ans='$no_ans' WHERE cat_id='$cat_id'";
			if($run->register($updats)){
				$run->url('profile.php?msg=DataUpdated');
			}else{
				$run->url('profile.php?msg=Something is wrong!');
			}
		}
	}else{
		$run->url('profile.php');
	}
}
/* End coding for store database */
?>

<hr />
<div class="text-center">
	You want to save your result?
	<form method="post">
	<?php
	$run->results($_POST); // for get input values here... 
	?>
	<input name="store" style="width: 100px;margin-top: 20px;" value="Yes" class="btn btn-lg btn-success" type="submit">
	<input name="store" style="width: 100px;margin-top: 20px;" value="No" class="btn btn-lg btn-success" type="submit">
</div>

</form>



<?php 
echo "<br><br>";
  include 'inc/footer.php';
?>


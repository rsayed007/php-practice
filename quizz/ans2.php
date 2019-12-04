<?php 
  include 'inc/header.php';
  include 'lib/class.php';

/* Check login */
if ($_SESSION['email']=="") {
  $run->url("index.php"); 	    // run object of " user "calss
}

?>
<hr />


<div class="container">

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
		        <td><?php echo $answer['wrong']; ?></td>
		      </tr>
		      <tr>
		        <td>No answer</td>
		        <td><?php echo $answer['no_ans']; ?></td>
		      </tr>
		      <tr>
		        <td>Progress</td>
		        <td>
		        </td>
		      </tr>
		    </tbody>
	  	</table>
	</div>
</div>


</form>
<?php 
print_r($_POST);
 ?>
<?php include 'inc/footer.php'; ?>
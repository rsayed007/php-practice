<?php
	$con = mysqli_connect ("localhost", "root", "") or die ('Error because of: ' . mysql_error());
	mysqli_select_db ($con,'quizz');

	if(isset($_POST['category'])){

		$_id = $_POST['category'];
		$query = mysqli_query($con,"SELECT * FROM question WHERE cat_id=$_id");

		$limit = 10;
		if(isset($_POST["setPage"])){
			$pageno = $_POST["pageNumber"];
			$start = ($pageno * $limit) - $limit;
		}else{
			$start = 0;
		}

		$runquery = mysqli_query($con,"SELECT * FROM question WHERE cat_id='$_id' LIMIT $start,$limit");

		if (mysqli_num_rows($runquery) > 0) {

			$i=$start+1;

			while ($row = mysqli_fetch_array($runquery)) {	

		        $question = $row["question"];

            	$id = $row["id"];
            	$q1 = $row['ans1'];
            	$q2 = $row['ans2'];
            	$q3 = $row['ans3'];
            	$q4 = $row['ans4'];
            	$answer = $row['ans'];

				echo"
		          <thead>
		            <tr class='bg-info'>
		              <th>$i  $question</th>
		               <th><a href='qusUpdate.php?upd=$id' class='btn btn-sm' >Update</a></th>
	 				   <th><a href='?del=$id' class='btn btn-sm' onclick=return confirm('Are you sure to Delete this Category!')' >Delete</a></th>
		            </tr>
		          </thead>
		          <tbody class='text-left'>
		            <tr> <td>1 $q1</td> </tr>
		            <tr> <td>2 $q2</td> </tr>
		            <tr> <td>3 $q3</td> </tr>
		            <tr> <td>4 $q4</td> </tr>
		            <tr> <td class='lead text-success'>Answer $answer</td> </tr>
		          </tbody>
		          ";
		        $i++;
			}
		}			
	}


	if(isset($_POST['pagecategory'])){
		$_id = $_POST['categoryId'];
		$query = "SELECT * FROM question WHERE cat_id=$_id ";
		$runquery = mysqli_query($con,$query);
		$count = mysqli_num_rows($runquery);
		$pageno = ceil($count/10);
		for($i=1;$i<=$pageno;$i++){
			echo "
				<li><button type='button' page='$i' id='page_c'>$i</button></li>
			";
		}		
		
	}

		
?>
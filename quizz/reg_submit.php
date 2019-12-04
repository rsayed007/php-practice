<?php
	include 'lib/class.php';
 
	extract($_POST);
	if (isset($submit)) {
		$img = $_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'],'img/'.$img);
		$inserts="insert into signup values ('','$name','$phone','$email','$pwd','$img')";

		$chack ="SELECT * FROM signup WHERE email = '$email'";
		$mailChack = $run->conn->query($chack);
		
		if($run->register($chack)){
			if ($mailChack->num_rows>0) {
				$run->url('signup.php?msg=run');
			}
			else {
				if($run->register($inserts)){
					
					$query = "SELECT * FROM signup WHERE email = '$email'";
					$query_run = $run->register($query);
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					header( "Location: index.php");
				} 
				$run->url('signup.php?msgg=run');
			}
			
		}
		
	}
	
/* Check login */
/*if ($_SESSION['email']=="") {
  $run->url("index.php");
}*/

?>
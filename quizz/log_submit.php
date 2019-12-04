<?php
	include 'lib/class.php';
	extract($_POST);
	if (isset($submit)) {
		$select ="select email,pass from signup where email='$email' and pass='$pwd'";
		if($run->login($select)){
			$_SESSION['email']=$email;
			$run->userProfile($email);
			 foreach ($run->data as $profile) {
			 	$name = $profile['name'];
			 }
			 $_SESSION['name'] = $name;			
			//$run->url("index.php?msg=run");
		}else{
			$run->url("login.php?err=error");
		}$run->url("login.php?err=error");
	}

/* Check login */
if ($_SESSION['email']=="") {
  $run->url("login.php?err=error");
}
else{
	$run->url('index.php');
}

?>
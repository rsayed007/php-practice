<?php 
include "../lib/class.php";
	


	  /* Check Session */
	if (isset($_SESSION['nameAdmin']) && $_SESSION['nameAdmin'] != NULL) {
	  header("Location:index.php");
	}

 ?>

 <?php 
	 if (isset($_POST['login'])) {
 		$name = $_POST['name'];
 		$password = $_POST['password'];

 		$query = "SELECT * FROM admin WHERE name = '$name' AND password = '$password' ";
 		$fire=$run->conn->query($query);
 		if ($fire) {
 			if (mysqli_num_rows($fire)>0) {
 				$_SESSION['login']= true;
 				$_SESSION['nameAdmin'] = $name;
 				header("Location:index.php");
 			}else{
 				echo "Data not match";
 			}
 		}
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz WhizZ Admin</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link href="../css/dashboard.css" rel="stylesheet">

</head>
<body>
	<div class="container col-sm-10  ">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-5 form-degine">
				<form class="form-signin" action="" method="POST" name="login" id="login">
			      <h1 class="text-center">Admin Login</h1>
			      
			      <label for="">User Name</label>
			      <input type="text" name="name" id="name" class="form-control" placeholder="User name"  autofocus>
			      
			      <label for="" >Password</label>
			      <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
			      <div class="checkbox mb-3">
			      
			      </div>
			      <button class="btn  btn-primary btn-block" name="login" id="login" type="submit">Login</button>
			    </form>
			</div>
		</div>
	</div>
	

</body>
</html>
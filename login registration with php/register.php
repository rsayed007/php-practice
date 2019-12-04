<?php include 'class/user.php' ?>

<?php
    $user = new User();
    if(isset($_REQUEST['submit']) && !empty($_REQUEST['submit'])){
        $userRegi =$user->userRegistration($_POST);
    }
?>


<!DOCTYPE html>
<html lang="en">
    <?php include 'include/header.php' ?>
<body>
<?php include 'include/navbar.php' ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <div class="card col-8 mt-auto p-2 bd-highlight">
                <div class="card-header bg-success text-center">
                    <h3>Registration Form</h3>
                </div>
                <div class="card-body">
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

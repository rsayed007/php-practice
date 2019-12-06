<?php 
    include 'inc/nav.php';
    include 'lib/user.php';
    include 'lib/session.php';

    $user = new User();
    if (isset($_POST['register'])) {
        // echo 'hello user';
        $regData = $user->userRegistration($_POST);
    }

    if (isset($_SESSION['email'])) {
        header("Location: index.php");
    }
?>


<?php include 'inc/header.php' ?>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                <h2> Registration From</h2>
                </div>

<?php
    if (isset($regData)) {
        echo $regData;        
    }

?>


                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label >Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" id="password">
                        </div>
                        
                        <button type="submit" name="register" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'inc/footer.php' ?>

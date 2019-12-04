<!DOCTYPE html>
<html lang="en">
    <?php include 'include/header.php' ?>
<body>
<?php include 'include/navbar.php' ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card col-8 mt-auto p-2 bd-highlight">
                <div class="text-center">
                    <h3>Login Form</h3>
                </div>
                <div class="card-body">
                    <form action="/action_page.php">
                        <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

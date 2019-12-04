<?php
include 'class/db.php';

    $db = new DB();
    if(isset($_REQUEST['submit']) && !empty($_REQUEST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO users (name, email, password) VALUE('$name','$email','$password')";
        if ($db->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        echo "data ase ";
    }else{
        echo "data nai ";
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
                    <h3>User Data Table</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>john@example.com</td>
                            <td>
                                <span class=" btn btn-success ">view</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>mary@example.com</td>
                            <td>
                                <span class=" btn btn-success">view</span>
                            </td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>july@example.com</td>
                            <td > 
                                <span class=" btn btn-success">view</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
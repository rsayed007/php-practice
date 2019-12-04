<?php
include 'class/db.php';

    $db = new DB();

    $sql = "SELECT * FROM users";
    $userData = $db->select($sql);    



// delete user data 
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM users WHERE id='$id'";
        $db->deleteData($sql);
    }
?>


<!DOCTYPE html>
<html lang="en">
    <?php include 'include/header.php' ?>
<body>
<?php include 'include/navbar.php' ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <div class="card col-10 mt-auto p-2 bd-highlight">
                <div class="card-header bg-success text-center">
                    <h3>User Data Table</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ($data = $userData->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $data['name'] ?></td>
                                <td><?php echo $data['email'] ?></td>
                                <td> <img src="<?php echo 'image/'.$data['image'] ?>" width="70" alt="">
                                    </td>
                                <td>
                                    <a href="register.php?edit=<?php echo $data['id']; ?>" class="  text-info ">edit</a> ||
                                    <a href="index.php?delete=<?php echo $data['id']; ?>" class="  text-danger ">delete</a> || 
                                    <a class="  text-success ">view</a>
                                </td>
                            </tr>

                        <?php  }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
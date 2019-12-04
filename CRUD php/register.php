<?php
    include 'class/db.php';

    $db = new DB();

// insert data
    if (isset($_POST['register'])) {
        $userName = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $imageName = rand(101,500).'_'.$file_name;
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
               $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 2097152){
               $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,"image/".$imageName);
               echo "Success";
            }else{
               print_r($errors);
            }
        }
        $image = $imageName;

        $sql = "INSERT INTO users(name,email,image,password) VALUES('$userName','$email','$image','$password')";
        $db->inserted($sql);
    
    }
// edit data
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $sql= "SELECT * FROM users WHERE id=$id";
        $userData = $db->editData($sql)->fetch_assoc();
    }

// update data

    if (isset($_POST['update'])) {
        print_r($_POST);
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE users SET name='$name',email='$email',password='$password' WHERE id='$id'";
        $db->updateData($sql);
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
                    <?php if(isset($_GET['edit'])){
                            echo "<h3>Update User Data</h3>";
                        }else{
                            echo "<h3>Registration Form</h3>";
                        }
                    ?>
                    
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php if(isset($_GET['edit'])) echo $userData['name'] ?>" >
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php if(isset($_GET['edit'])) echo $userData['id'] ?>" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($_GET['edit'])) echo $userData['email'] ?>" >
                        </div>
                        <div class="form-group">
                            <label for="file">Image:</label>
                            <input type="file" class="form-control" id="image"  name="image" value="<?php if(isset($_GET['edit'])) echo $userData['image'] ?>" >
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
                        <?php if(isset($_GET['edit'])){ ?>
                                <button type="submit" name="update" class="btn btn-info">Update</button>
                         <?php   }else{ ?>
                                <button type="submit" name="register" class="btn btn-success">Submit</button>
                        <?php   }   ?>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

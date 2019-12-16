<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// Create connection
$conn = mysqli_connect($host, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['file'])){
    if($_FILES['txt-file'] && !empty($_FILES)){
        $file_name = $_FILES['txt-file']['tmp_name'];
        if ($_FILES['txt-file']['size'] > 0) {
            $file_O = fopen($file_name, 'r');
            while(!feof($file_O)) {
                $userData = fgets($file_O);
                $line = explode('; ', $userData);

                echo '<pre>';
                print_r( $line);
                $sql = " INSERT INTO user_data (member_id, name, phone, email) VALUE('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."')";
                $fire = mysqli_query($conn, $sql);

                if ($fire) {
                    echo 'data send';
                }else{
                    
                    echo 'data send hoinai';
                }
            }
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Hello </h2>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="txt-file" ><br>
        <button type="submit" name="file">Submit</button>
    </form>
</body>
</html>
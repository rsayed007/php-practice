<?php 
    include 'inc/header.php';
    include 'lib/session.php';
    include 'lib/user.php';

?>

<?php
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
    }

    $user = new User();
   
        // $regData = $user->userRegistration($_POST);
        $sql = "SELECT * FROM users";
        $userData = $user->db->pdo->query($sql);

        // var_dump($userData);
        // foreach ($userData as $row) {
        //     foreach($row as $cell) {
        //       echo('-----' . $cell . '---');
        //     }
        //   echo('##');
        // }

    if (isset($_GET['delete'])) {
        $result = $user->deleteUser($_GET);
        // $id = $_GET['delete'];
        // echo $id;
    }



?>

<?php include 'inc/nav.php' ?>


<div class="container">
  <h2></h2>
  <div class="card">
    <div class="card-header text-center">
       <h2> User Info</h2>
    </div>

<?php
    if (isset($result)) {
        echo $result;        
    }

?>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row = $userData->fetch()){ ?>
            
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="?delete=<?php echo $row['id']; ?>">Edit</a> ||
                        <a href="?delete=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                
            <?php }  ?>
            
            </tbody>
        </table>
    </div>
  </div>
</div>


<?php include 'inc/footer.php' ?>

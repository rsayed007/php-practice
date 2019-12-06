<?php
    include "db.php";


class User{
    public $db;
    
    public function __construct()
    {
        $this->db = new DataBase;
    }

    public function userRegistration($data){
        $name       = $data['name'];
        $email      = $data['email'];
        // $password   = md5($data['password']);
        $password  = password_hash($data['password'], PASSWORD_DEFAULT);

        $checkEmail = $this->emailCheck($email);


        if ($name == "" OR $email == "" OR $password == "") {
            $msg = "Field must not be empty !!!";
            return $msg;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
            echo("$email is not a valid email address");
        }
        if ($checkEmail == true){
            $msg = "$email is already exists";
            return $msg;
        }
        $sql = "INSERT INTO users (name,email,password) VALUES ('$name', '$email', '$password')";

        // print_r($sql);
        
        if ($this->db->pdo->exec($sql)) {
            echo("you are successfully register");
        }else{
            echo("have some problem for register");

        }

        // function emailCheck($email){
        //     $sql = "SELECT email FROM users WHERE email = :email";
        //     $query = $this->db->pdo->prepare($sql);
        //     $query->bindValue(":email",$email);
        //     $query->execute();
        //     if ($query->num_rows > 0) {
        //         return true;
        //     }else{
        //         return false;
        //     }
        // }
    }
/* *******************Email check************************* */ 
    function emailCheck($email){
        $sql = "SELECT email FROM users WHERE email = :email ";
        $query = $this->db->pdo->prepare($sql ); // prepare() is the method of PDO class;
        $query->bindValue(':email',$email);  //bindValue() is the method of PDO class;
        $query->execute();
        if($query->rowCount()>0){
            return true;
        }else{
            return false;
        }   
    }

// **** login function ***********************
    public function userLogin($data){
        $email      = $data['email'];
        $password   = $data['password'];

        $checkEmail = $this->emailCheck($email);
        

        if ($email == "" OR $password == "") {
            $msg = "Field must not be empty !!!";
            return $msg;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
            echo("$email is not a valid email address");
        }

        if ($checkEmail == false){
            $msg = "$email is not exists";
            return $msg;
        }

        try {
            $sql = "SELECT * FROM users WHERE email = :email";
            $statement = $this->db->pdo->prepare($sql);
            $statement->execute(array(':email' => $email));
            

            while($row = $statement->fetch()){
                $id = $row['id'];
                $email = $row['email'];
                $hashPassword = $row['password'];

                if (password_verify($password, $hashPassword)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['email'] = $email;
                   header("Location: index.php");
                }
                else{
                    header("Location: login.php");
                }
            }

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /* ******** delete ****************** */
    public function deleteUser($data){
        $id = $data['delete'];
        $sql = "DELETE FROM users WHERE id=$id";
        $result = $this->db->pdo->query($sql);
        
        if ($result) {
            $msg = 'User Removed Successfully';
            header("Location: login.php");
            return $msg;
        }
    }



}
?>
<?php
class model
{
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function is_taken_username($username)
    {
        $sql = "SELECT username FROM `users` WHERE username = :username";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function is_taken_email($email)
    {
        $sql = "SELECT email FROM `users` WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function is_taken_pwd($password)
    {
        $sql = "SELECT pwd FROM `users` WHERE pwd = :pwd";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":pwd", $password);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insert($username, $email, $password)
    {
        $sql = "INSERT INTO `users` (username, email, pwd) VALUES (:username, :email, :pwd)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pwd', $password);
        $stmt->execute();
        return true;
    }

    // login method
    public function login($email, $pwd)
    {
        $sql = "SELECT * FROM `users` WHERE email=:email AND pwd=:pwd";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function editprofile($id, $username, $email, $password)
    {
        $sql = "UPDATE `users` 
            SET username = :username, 
                email = :email, 
                pwd = :pwd 
            WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pwd', $password);
        $stmt->execute();
        return true;
    }

    public function Get_User_By_Id($id) {
        $sql = "SELECT * FROM `users` WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    }
}
?>
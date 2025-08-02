<?php
class database
{
    protected $server = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "e-commerce";

    public $conn;

    public function connection()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->server; dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die('Connection Failed : ' . $e->getMessage());
        }
    }
}
?>
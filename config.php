<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "users_db";
    private $dsn;
    private $conn;

    public function __construct() {
        $this->dsn = "mysql:host=$this->host;dbname=$this->database";
        $this->connect();
    }

    private function connect() {
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            // echo $e->getMessage();
            // echo $e->getCode();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

$database = new Database();
$conn = $database->getConnection();
?>

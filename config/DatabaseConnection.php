<?php

class DatabaseConnection
{
    public $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=127.0.0.1;dbname=av_db", 'root', '');
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function fetchAll()
    {
        $results = $this->conn->query('SELECT * FROM products');
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>
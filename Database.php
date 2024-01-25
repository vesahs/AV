<?php 

class Database {

    public $pdo;

    public function __construct($dataBase, $host, $port, $dbName, $dbUser = 'root' , $password = '') {
        $link = "{$dataBase}:host={$host};port={$port};dbname={$dbName}";
        
        $this->pdo = new PDO($link, $dbUser, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query) {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
}
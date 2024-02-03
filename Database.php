<?php 

class Database {

    public $pdo;
    public $statement;
    public function __construct($dataBase, $host, $port, $dbName, $dbUser = 'root' , $password = '') {
        $link = "{$dataBase}:host={$host};port={$port};dbname={$dbName}";
        
        $this->pdo = new PDO($link, $dbUser, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []) {
        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function create() {
        return $this->statement->execute();
    }

    public function findOne() {
        return $this->statement->fetch();
    }

    public function findAll() {
        return $this->statement->fetchAll();
    }

    public function findOrFail() {
        $data = $this->findOne();
        
        if(!$data) {
            abort();
        }

        return $data;
    }
}
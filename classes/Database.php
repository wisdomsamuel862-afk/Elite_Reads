<?php
class Database{
    private $host = "localhost";
    private $user = "root";
    private $dbName = "elite_reads";
    private $password = "";
    
    public function connect(){
        try{
            $dsn= "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4";
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOEXception $e){
            die("Connection failed:".$e->getMessage);
        }
    }
}

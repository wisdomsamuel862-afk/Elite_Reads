<?php
class Admin{
    private $pdo;
    public function __construct($pdo){
        $this->pdo= $pdo;
    }
    public function registerAdmin($name, $email, $password){
        $sql = "INSERT INTO admins (name, email, password)VALUES(?,?,?)";
        $stmt=$this->pdo->prepare($sql);
        return $stmt->execute([$name, $email, $pasword])
    }
    public function loginAdmin($email){
        $sql= "SELECT * FROM admins WHERE email=?";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute([$email]);
    }
}
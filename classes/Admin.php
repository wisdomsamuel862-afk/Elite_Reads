<?php
class Admin{
    private $pdo;
    public function __construct($pdo){
        $this->pdo= $pdo;
    }
    public function registerAdmin($name, $email, $password){
        $sql = "INSERT INTO admins (name, email, password)VALUES(?,?,?)";
        $stmt=$this->pdo->prepare($sql);
        return $stmt->execute([$name, $email, $password]);
    }
    public function loginAdmin($email){
        $sql= "SELECT * FROM admins WHERE email=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            return $admin;

    }
}
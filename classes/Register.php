<?php
class Register{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function registerMember($name, $email, $phone, $hashed_password){
        $sql = "INSERT INTO members (name, email, phone, password)VALUES(?,?,?,?)"
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$name, $email, $phone, $hashed_password]);
    }
}

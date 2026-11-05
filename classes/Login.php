<?php
class Login{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function loginMember($email, $password){
        $sql="SELECT * FROM members WHERE email=?";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$email]);
        $member = $stmt->fetch(PDO::FETCH_ASSOC);

        if($member && password_verify($password, $member['password'])){
            return $member;
        }
        return false;
    }
}
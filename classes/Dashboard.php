<?php
class Dashboard{
private $pdo;
public function __construct($pdo){
    $this->pdo = $pdo;
}
public function getMember($id){
    $sql= "SELECT id,name, email, phone FROM members ORDER BY id DESC";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
public function searchMembers($name){
    $sql= "SELECT * FROM members WHERE name LIKE '%?%' ";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$name]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}

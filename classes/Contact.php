<?php
class Contact{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function getMessages($name, $email, $phone, $message){
        $sql="INSERT INTO contact_messages(name, email, phone, message) VALUES(?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$name, $email, $phone, $message]);
    }
    public function messages(){
    $sql="SELECT * FROM contact_messages ORDER created_at";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deleteMessage($id){
        $sql= "DELETE FROM CONTACTS WHERE id=?";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
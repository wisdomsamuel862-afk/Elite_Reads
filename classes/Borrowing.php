<?php
class Borrowing{
    private $pdo;
    public function __construct($pdo){
        $this->pdo= $pdo;
    }
    public function requestBorrow($member_id, $book_id){
        $sql= "INSERT INTO (member_id, book_id, status)VALUES(?,?,'pending')";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute([$member_id, $book_id]);
    }
    public function getMemberBorrowings($member_id){
        $sql= "SELECT borrowings.*, books.title, books.cover_image FROM borrowing JOIN books ON borrowing.book_id = books.id WHERE borrowing.member_id = ? ORDER BY borrowing.id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$member_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateStatus($id, $status){
        $allowed = ['pending', 'borrowed', 'returned', 'rejected'];
        if(!in_array($status, $allowed, true)){
            return false;
        }
        $sql= "UPDATE borrowing SET status = ? WHERE id = ?";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute([$status,$id]);
    }
}
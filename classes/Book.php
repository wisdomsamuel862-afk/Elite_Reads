<?php
class Book{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function getBooks(){
        $sql= "SELECT books.*, categories.name FROM books JOIN categories ON books.category_id";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getBook($id){
        $sql="SELECT books.*, categories.name FROM books JOIN categories ON books.category_id= categories.id WHERE books.id= ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function addBook($title, $author, $description, $category_id, $cover_image){
        $sql= "INSERT INTO books(title, author, description, category_id, cover_image)VALUES(?,?,?,?,?)";
        $stmt= $this->pdo->prepare($sql);
       return $stmt->execute([$title, $author, $description, $category_id, $cover_image]);
    }
    public function updateBook($id, $title, $author, $description, $category_id){
        $sql= "UPDATE books SET title=?, author=?, description=?, category=? WHERE id=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$title, $author, $description, $category_id, $id]);
    }
    public function deleteBook($id){
        $sql= "DELETE FROM books WHERE id=?";
        $stmt=$this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function searchBook($keyword){
        $sql= "SELECT * FROM books WHERE title LIKE ? OR author LIKE ?";
        $stmt= $this->pdo->prepare($sql);
        $search= "%". $keyword. "%";
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
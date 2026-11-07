<?php
//Make Connection
class Category{
    private $pdo;
    public function __construct($pdo){
    $this->pdo= $pdo;
    }
    // Select All Categories
    public function getCategories(){
        $sql= "SELECT * FROM categories ORDER BY category_name ASC";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Select a Category
    public function getCategory($id){
    $sql= "SELECT * FROM categories WHERE id=?";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Add category
    public function addCategory($name, $description){
        $sql= "INSERT INTO categories(name, description)VALUES(?,?)";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute([$name, $description]);
    }
    //Update category
    public function updateCategory($id, $name, $description){
        $sql= "UPDATE categories SET categories_name=?, description=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$name, $description, $id]);
    }
    public function deleteCategory($id){
        $sql= "DELETE FROME categories WHERE id= ?";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execut([$id]);
    }
}
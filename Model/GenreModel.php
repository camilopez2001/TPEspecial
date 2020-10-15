<?php

class GenreModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_game;charset=utf8', 'root', '');
    }

    function GetGenres(){
        $sentencia = $this->db->prepare("SELECT * FROM genre");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function GetGenre($genre_id){
        $sentencia = $this->db->prepare("SELECT * FROM genre WHERE id=?");
        $sentencia->execute(array($genre_id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
    function InsertGenre($name,$description){
        $sentencia = $this->db->prepare("INSERT INTO genre(name, description) VALUES(?,?)");
        $sentencia->execute(array($name,$description));
    }

    function DeleteGenre($genre_id){
        $sentencia = $this->db->prepare("DELETE FROM genre WHERE id=?");
        $sentencia->execute(array($genre_id));
        
    }
    function EditGenre($genre_id,$name,$description){
        $sentencia = $this->db->prepare("UPDATE genre SET name=?, description=? WHERE id=?");
        $sentencia->execute(array($name,$description,$genre_id));
       
     }
}
?>
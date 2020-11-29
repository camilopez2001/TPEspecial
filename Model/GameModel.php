<?php

class GameModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_game;charset=utf8', 'root', '');
    }
    
    function GetGames(){
        $sentencia = $this->db->prepare("SELECT * FROM game");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function GetGame($id){
        $sentencia = $this->db->prepare("SELECT * FROM game WHERE id=?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function GetGamesFree(){
        $sentencia = $this->db->prepare("SELECT * FROM game WHERE precio = 0");
        $sentencia->execute(array());
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function generoEspecifico($genre_id){
        $sentencia = $this->db->prepare("SELECT game.*, genre.id AS genre_Id FROM game JOIN genre ON game.id_genre = genre.id WHERE genre.id=?"  );
        $sentencia->execute([$genre_id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function InsertGame($title,$precio,$version,$memoria,$genre){
        $sentencia = $this->db->prepare("INSERT INTO game(title, precio,version,memoria,id_genre) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($title,$precio,$version,$memoria,$genre));
    }
    function InsertGameImage($title,$precio,$version,$memoria,$genre,$img){
        $sentencia = $this->db->prepare("INSERT INTO game(title, precio,version,memoria,id_genre,image) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($title,$precio,$version,$memoria,$genre,$img));
    }

     function DeleteGame($game_id){
        $sentencia = $this->db->prepare("DELETE FROM game WHERE id=?");
        $sentencia->execute(array($game_id));
    }
    
    function DeleteImg($id){
        $sentencia = $this->db->prepare("UPDATE game SET image = null WHERE id=?");
        $sentencia->execute(array($id));
    }
    function EditGame($game_id,$title,$precio,$version,$memoria,$genre){
       $sentencia = $this->db->prepare("UPDATE game SET title=?, precio=?,version=?,memoria=?,id_genre=?  WHERE id=?");
       $sentencia->execute(array($title,$precio,$version,$memoria,$genre,$game_id));
    }
    
    function EditGameImg($game_id,$title,$precio,$version,$memoria,$genre,$img){
        $sentencia = $this->db->prepare("UPDATE game SET title=?, precio=?,version=?,memoria=?,id_genre=?,image=?  WHERE id=?");
        $sentencia->execute(array($title,$precio,$version,$memoria,$genre,$img,$game_id));
     }
    
   // unlink('path/to/file.jpg')
    
}
?>
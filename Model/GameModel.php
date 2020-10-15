<?php

//require_once "./GenreModel.php";
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
    function GetGame($game_id){
        $sentencia = $this->db->prepare("SELECT * FROM game WHERE id=?");
        $sentencia->execute(array($game_id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
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
    
     function DeleteGame($game_id){
        $sentencia = $this->db->prepare("DELETE FROM game WHERE id=?");
        $sentencia->execute(array($game_id));
    }

    function EditGame($game_id,$title,$precio,$version,$memoria,$genre){
       $sentencia = $this->db->prepare("UPDATE game SET title=?, precio=?,version=?,memoria=?,id_genre=?  WHERE id=?");
       $sentencia->execute(array($title,$precio,$version,$memoria,$genre,$game_id));
    }
    
   
    
}
?>
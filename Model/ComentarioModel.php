<?php

class ComentarioModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_game;charset=utf8', 'root', '');
    }
    
    function GetComentariosJuego($game_id){
        $sentencia = $this->db->prepare("SELECT *, comentarios.id as IDcomentario FROM comentarios JOIN usuario ON comentarios.id_usuario_fk = usuario.id WHERE comentarios.id_juego=?");
        $sentencia->execute([$game_id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function GetComentario($comentario_id){
        $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE id=?");
        $sentencia->execute(array($comentario_id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function InsertComentario($comentario, $valoracion, $id_juego, $id_user){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario,valoracion, id_juego, id_usuario_fk) VALUES(?,?,?,?)");
        $sentencia->execute(array($comentario, $valoracion,$id_juego, $id_user));
    }
     function DeleteComentario($comentario_id){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id=?");
        $sentencia->execute(array($comentario_id));
    }
}
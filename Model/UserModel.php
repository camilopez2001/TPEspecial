<?php
class UserModel{

private $db;

function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_game;charset=utf8', 'root', '');
}
function GetUsuario($usuario){
    $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
    $sentencia->execute(array($usuario));
    return $sentencia->fetch(PDO::FETCH_OBJ);
}
  
}
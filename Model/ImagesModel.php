<?php

class ImagesModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_game;charset=utf8', 'root', '');
    }
    function getImg($id){
        $sentencia = $this->db->prepare("SELECT * FROM image WHERE id=?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function agregarImages($id,$imagenes){
        $rutas = $this->subirImagenes($imagenes);
        $sentencia_imagenes = $this->db->prepare('INSERT INTO image(fk_id_game,path) VALUES(?,?)');
        foreach ($rutas as $ruta) {
          $sentencia_imagenes->execute([$id,$ruta]);
        }
    }

    function subirImagenes($imagenes){
        $rutas = [];
        foreach ($imagenes as $imagen) {
          $destino_final = 'img/' . uniqid() . '.jpg';
          move_uploaded_file($imagen, $destino_final);
          $rutas[]=$destino_final;
        }
        return $rutas;
    }

    function getGameimg($id){
        $gameImagenes = [];
        $sentencia_imagenes = $this->db->prepare( "SELECT * from image where fk_id_game=?");
        $sentencia_imagenes->execute([$id]);
        return  $sentencia_imagenes->fetchAll(PDO::FETCH_OBJ);
    }
    
    function DeleteImg($id){
        $sentencia = $this->db->prepare("DELETE FROM image WHERE id=?");
        $sentencia->execute(array($id));
    }
    function EditImg($id_img,$path){
        $sentencia = $this->db->prepare("UPDATE image SET path=? WHERE id=?");
        $sentencia->execute(array($path,$id_img));
     }
}
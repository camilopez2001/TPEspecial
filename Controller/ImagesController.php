<?php

require_once "./View/View.php";
require_once "./Model/ImagesModel.php";

class ImagesController{
    private $view;
    private $model;

    function __construct(){
        $this->view = new View();
        $this->model = new ImagesModel();
    }

    function GetImages($params = null){
        $game_id = $params[':ID'];
        $imagenes = $this->model->getGameimg($game_id);
        $this->view->ShowImages($imagenes,$game_id);
    }
    
    function InsertImgInicio($id = null){
        $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
        if($this->sonJPG($_FILES['imagenes']['type'])) {
            $this->model->agregarImages($id,$rutaTempImagenes);
        }
        $this->view->ShowUserLoc();
    }

    function InsertImgForm(){
        $id = $_POST['input_id'];
        $this->InsertImgInicio($id);
    }
    public function sonJPG($imagenesTipos){
        foreach ($imagenesTipos as $tipo) {
          if($tipo != 'image/jpeg') {
            return false;
          }
        }
        return true;
    }

    function DeleteImg($params = null){
        $id = $params[':ID'];
        $img =  $this->model->getImg($id);
        unlink($img->path);
        $this->model->DeleteImg($id);
        $this->view->ShowUserLoc();
    }
    
    function Modificar(){
        if($_FILES['input_img']['type'] == "image/jpg" || $_FILES['input_img']['type'] == "image/jpeg" || $_FILES['input_img']['type'] == "image/png" ) {
            $fileTemp = $_FILES["input_img"]["tmp_name"];
            $filePath = "img/" . uniqid("", true) . "." . strtolower(pathinfo($_FILES['input_img']['name'], PATHINFO_EXTENSION));
            move_uploaded_file( $fileTemp, $filePath);
            unlink($_POST['input_path']);
            $this->model->EditImg($_POST['input_id_img'],$filePath);
        }$this->view->ShowUserLoc();
    }
}
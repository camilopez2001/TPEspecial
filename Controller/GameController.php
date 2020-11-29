<?php

require_once "./View/View.php";
require_once "./Model/GameModel.php";

class GameController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new View();
        $this->model = new GameModel();
    }

    function Games(){
        $games = $this->model->GetGames();
        $this->view->ShowGames($games);
    }
    
    function InsertGame(){
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ) {
            $fileTemp = $_FILES["input_name"]["tmp_name"];
            $filePath = "img/" . uniqid("", true) . "." . strtolower(pathinfo($_FILES['input_name']['name'], PATHINFO_EXTENSION));
            move_uploaded_file( $fileTemp, $filePath);
            $this->model->InsertGameImage($_POST['input_title'],$_POST['input_precio'],$_POST['input_version'],$_POST['input_memoria'],$_POST['input_genre'], $filePath);
        }
        else
          $this->model->InsertGame($_POST['input_title'],$_POST['input_precio'],$_POST['input_version'],$_POST['input_memoria'],$_POST['input_genre']);
        $this->view->ShowUserLoc();
    }
   

    function DeleteGame($params = null){
        $game_id = $params[':ID'];
        $this->model->DeleteGame($game_id);
        $this->view->ShowUserLoc();
    }
    function DeleteImg($params = null){
        $id = $params[':ID'];
        $game =  $this->model->GetGame($id);
        unlink($game->image);
        $this->model->DeleteImg($id);
        $this->view->ShowUserLoc();
    }
    
    function Modificar(){
        if($_FILES['input_image']['type'] == "image/jpg" || $_FILES['input_image']['type'] == "image/jpeg" || $_FILES['input_image']['type'] == "image/png" ) {
            $fileTemp = $_FILES["input_image"]["tmp_name"];
            $filePath = "img/" . uniqid("", true) . "." . strtolower(pathinfo($_FILES['input_image']['name'], PATHINFO_EXTENSION));
            move_uploaded_file( $fileTemp, $filePath);
            unlink($_POST['input_img']);
            $this->model->EditGameImg($_POST['input_id'],$_POST['input_title'],$_POST['input_precio'],$_POST['input_version'],$_POST['input_memoria'],$_POST['input_genre'], $filePath);
        }
        else
            $this->model->EditGame($_POST['input_id'],$_POST['input_title'],$_POST['input_precio'],$_POST['input_version'],$_POST['input_memoria'],$_POST['input_genre']);
        $this->view->ShowUserLoc();
    }
}

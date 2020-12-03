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
    
    function DeleteGame($params = null){
        $game_id = $params[':ID'];
        if(isset($game_id)){
            $this->model->DeleteGame($game_id);
            $this->view->ShowUserLoc();
        }
        
    }
    
    function Modificar(){
        if(!empty($_POST['input_title'])){
            $this->model->EditGame($_POST['input_id'],$_POST['input_title'],$_POST['input_precio'],$_POST['input_version'],$_POST['input_memoria'],$_POST['input_genre']);
        }
        $this->view->ShowUserLoc();
    }
}

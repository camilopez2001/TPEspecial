<?php

require_once "./View/View.php";
require_once "./Model/GenreModel.php";

class GenreController{

    private $view;
    private $modelGenre;

    function __construct(){
        $this->view = new View();
        $this->modelGenre = new GenreModel();
    }
    

    function InsertGenre(){
        $this->modelGenre->InsertGenre($_POST['input_name'],$_POST['input_description']);
        $this->view->ShowUserLoc();
    }
    function DeleteGenre($params = null){
        $genre_id = $params[':ID'];
        $this->modelGenre->DeleteGenre($genre_id);
        $this->view->ShowUserLoc();
    }
    function EditGenre($params = null){
        $genre_id = $params[':ID'];
        $genre = $this->modelGenre->GetGenre($genre_id);
        $this->view->mostrarEditarGenre($genre);
    }
    function ModificarGenre(){
        $this->modelGenre->EditGenre($_POST['genre_id'],$_POST['input_name'],$_POST['input_description']);
        $this->view->ShowUserLoc();
    }
    
    function Genres(){
        $genre = $this->modelGenre->GetGenres();
        $this->view->ShowGenres($genre);
    }
    
}
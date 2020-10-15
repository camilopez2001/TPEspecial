<?php

require_once "./View/View.php";
require_once "./Model/GameModel.php";
require_once "./Model/GenreModel.php";

class Controller{

    private $view;
    private $model;
    private $modelGenre;

    function __construct(){
        $this->view = new View();
        $this->model = new GameModel();
        $this->modelGenre = new GenreModel();
    }

    private function checkLoggedIn(){
        session_start();
        
        if(!isset($_SESSION["EMAIL"])){
            header("Location: ". LOGIN);
            die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] >1000)) { 
                header("Location: ". LOGOUT); 
                die();
            } 
        
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

    function Home(){
        $games = $this->model->GetGames();
        $genres = $this->modelGenre->GetGenres();
        $this->view->ShowHome($games,$genres);
    }


    function Genres(){
        $genre = $this->modelGenre->GetGenres();
        $this->view->ShowGenres($genre);
    }
    function Games(){
        $games = $this->model->GetGames();
        $genre = $this->modelGenre->GetGenres();
        $this->view->ShowGames($games,$genre);
    }
    

    function generoEspecifico($params = null){
        //Traer todos los jugos que tengan el id que me pasan por parametro
        $genre_id = $params[':ID'];
        $juegosGenero = $this->model->generoEspecifico($genre_id);
        $genre =  $this->modelGenre->GetGenre( $genre_id );
        $this->view->ShowJuegosEspecifico( $juegosGenero,$genre);
    }
    function DetalleJuego($params = null){
        $game_id = $params[':ID'];
        $game = $this->model->GetGame($game_id);
        $genre_id = $game->id_genre;
        $genre = $this->modelGenre->GetGenre($genre_id);
        $this->view->DetalleJuego($game,$genre);
    }


    function Comunidad(){
        $this->checkLoggedIn();
        $this->view->comunity();
    
    }
    function User(){
        $this->checkLoggedIn();
        $games = $this->model->GetGames();
        $genres = $this->modelGenre->GetGenres();
        $this->view->ShowAllAdmin($games, $genres);
    
    }



    function InsertGenre(){
        $this->modelGenre->InsertGenre($_POST['input_name'],$_POST['input_description']);
        header("Location: ".BASE_URL.'user');
    }
    function DeleteGenre($params = null){
        $genre_id = $params[':ID'];
        $this->modelGenre->DeleteGenre($genre_id);
        header("Location: ".BASE_URL.'user');
    }
    function EditGenre($params = null){
        $genre_id = $params[':ID'];
        $genre = $this->modelGenre->GetGenre($genre_id);
        $this->view->mostrarEditarGenre($genre);
    }
    function ModificarGenre(){
        $this->modelGenre->EditGenre($_POST['genre_id'],$_POST['input_name'],$_POST['input_description']);
        header("Location: ".BASE_URL.'user');
    }




    function InsertGame(){
        $this->model->InsertGame($_POST['input_title'],$_POST['input_precio'],$_POST['input_version'],$_POST['input_memoria'],$_POST['input_genre']);
        header("Location: ".BASE_URL.'user');
    }
    function DeleteGame($params = null){
        $game_id = $params[':ID'];
        $this->model->DeleteGame($game_id);
        header("Location: ".BASE_URL.'user');
    }
    function EditGame($params = null){
        $game_id = $params[':ID'];
        $genre = $this->modelGenre->GetGenres();
        $game = $this->model->getGame($game_id);
        $this->view->mostrarEditar($game,$genre);
    }
    function Modificar(){
        $this->model->EditGame($_POST['input_id'],$_POST['input_title'],$_POST['input_precio'],$_POST['input_version'],$_POST['input_memoria'],$_POST['input_genre']);
        header("Location: ".BASE_URL.'user');
    }
    
}
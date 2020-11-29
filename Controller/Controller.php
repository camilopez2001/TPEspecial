<?php

require_once "./View/View.php";
require_once "./Model/GameModel.php";
require_once "./Model/GenreModel.php";
require_once "./Model/UserModel.php";
require_once "./Model/ComentarioModel.php";
require_once "./helpers/auth.helper.php";

class Controller{

    private $view;
    private $modelGame;
    private $modelGenre;
    private $modelUser;
    private $modelComents;
    private $authHelper;

    function __construct(){
        $this->view = new View();
        $this->modelGame = new GameModel();
        $this->modelGenre = new GenreModel();
        $this->modelUser = new UserModel();
        $this->modelComents = new ComentarioModel();
        $this->authHelper = new AuthHelper();
    }

    function Home(){
        $games = $this->modelGame->GetGamesFree();
        $genres = $this->modelGenre->GetGenres();
        $this->view->ShowHome($games,$genres);
    }
    function EditGame($params = null){
        $game_id = $params[':ID'];
        $genre = $this->modelGenre->GetGenres();
        $game = $this->modelGame->getGame($game_id);
        $this->view->mostrarEditar($game,$genre);
    }
    
    function DetalleJuego($params = null){
        $game_id = $params[':ID'];
        $game = $this->modelGame->GetGame($game_id);
        $genre_id = $game->id_genre;
        $genre = $this->modelGenre->GetGenre($genre_id);
        $this->view->DetalleJuego($game,$genre);
    }

    function generoEspecifico($params = null){
        $genre_id = $params[':ID'];
        $juegosGenero = $this->modelGame->generoEspecifico($genre_id);
        $genre =  $this->modelGenre->GetGenre( $genre_id );
        $this->view->ShowJuegosEspecifico( $juegosGenero,$genre);
    }
    function Comunidad(){
        $this->authHelper->checkLoggedIn();
        $this->view->comunity();
    }
 
    function User(){
        $this->authHelper->checkLoggedIn();
        $userName =  $this->authHelper->getLogged();
        $games = $this->modelGame->GetGames();
        $genres = $this->modelGenre->GetGenres();
        if($userName){ 
            $this->view->ShowAllUser($games, $genres,$userName);
        }
    }
    
}
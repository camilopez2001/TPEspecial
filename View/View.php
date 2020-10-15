<?php
require_once "./libs/smarty/Smarty.class.php";
class View{
    private $titulo_game; 
    private $titulo_genre; 
        
    
    function __construct(){
        $this->titulo_game=" Juegos disponibles ";
        $this->titulo_genre=" Géneros ";
    }
    
    function ShowHome($games,$genre){
        $smarty = new Smarty();
        $smarty->assign('titulo_genre', $this->titulo_genre);
        $smarty->assign('genre', $genre);
        $smarty->assign('titulo', "Juegos Gratis");
        $smarty->assign('games', $games);
        $smarty->display('templates/ShowHome.tpl'); 
    }
    function ShowGenres($genres){
        $smarty = new Smarty();
        $smarty->assign('titulo_genre', $this->titulo_genre);
        $smarty->assign('genre', $genres);
        $smarty->display('templates/ShowGenres.tpl'); 
    }
    function ShowGames($games,$genre){
        $smarty = new Smarty();
        $smarty->assign('titulo_game', $this->titulo_game);
        $smarty->assign('genre', $genre);
        $smarty->assign('games', $games);
       $smarty->display('templates/showGames.tpl'); 

    }
    function comunity(){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Comunidad");
        
        $smarty->display('templates/showcomunidad.tpl'); 
    }
    function ShowAllAdmin($games, $genres){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Tu nombre");
        $smarty->assign('titulo_genre', $this->titulo_genre);
        $smarty->assign('titulo_game', $this->titulo_game);
        $smarty->assign('genre', $genres);
        $smarty->assign('games', $games);
        $smarty->display('templates/ShowAllAdmin.tpl'); 
    }
    
    function ShowJuegosEspecifico($games,$genre){
        $smarty = new Smarty();

        $smarty->assign('games', $games);
        
        $smarty->assign('titulo', $genre->name);
        $smarty->assign('descripcion', $genre->description);
        $smarty->display('templates/gameEspecifico.tpl'); 
    }

    function detalleJuego($game,$genre){
        
        $smarty = new Smarty();
        $smarty->assign('game', $game);
        $smarty->assign('genre', $genre);
        $smarty->display('templates/detalleJuego.tpl'); 
    }

    
    function mostrarEditar($game,$genre){
        $smarty = new Smarty();
        $smarty->assign('game', $game);
        $smarty->assign('genre', $genre);
        $smarty->display('templates/edit.tpl'); 
       
    }
    function mostrarEditarGenre($genre){
        $smarty = new Smarty();
        $smarty->assign('genre', $genre);
        $smarty->display('templates/editGenre.tpl'); 
       
    }

    function ShowUserLoc(){
        header("Location: ".BASE_URL.'user');
    }

}
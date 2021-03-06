<?php
require_once "./libs/smarty/Smarty.class.php";
require_once "./helpers/auth.helper.php";

class View{
    private $titulo_game; 
    private $titulo_genre; 
    private $smarty;
    private $authHelper;


    function __construct(){
        $this->titulo_game=" Juegos disponibles ";
        $this->titulo_genre=" Géneros ";
        $this->smarty=new Smarty();
        $this->authHelper = new AuthHelper();
    }
    
    function ShowHome($games,$genre){
        $this->smarty->assign('titulo_genre', $this->titulo_genre);
        $this->smarty->assign('genre', $genre);
        $this->smarty->assign('titulo', "Juegos Gratis");
        $this->smarty->assign('games', $games);
        $this->smarty->display('templates/ShowHome.tpl'); 
    }
    function ShowGenres($genres){
        $this->smarty->assign('titulo_genre', $this->titulo_genre);
        $this->smarty->assign('genre', $genres);
        $this->smarty->display('templates/ShowGenres.tpl'); 
    }
    function ShowGames($games){
        $this->smarty->assign('titulo_game', $this->titulo_game);
        $this->smarty->assign('games', $games);
        $this->smarty->display('templates/ShowGames.tpl'); 

    }
    function ShowImages($imagenes,$id_game){
        $this->smarty->assign('titulo', "Imagenes");
        $this->smarty->assign('id_game', $id_game);
        $this->smarty->assign('imagenes', $imagenes);
        $this->smarty->display('templates/ShowImg.tpl'); 

    }
    function comunity(){
        $this->smarty->assign('titulo', "Comunidad");
        $this->smarty->display('templates/showcomunidad.tpl'); 
    }
    function ShowAllUser($games, $genres){
        $this->smarty->assign('titulo_genre', $this->titulo_genre);
        $this->smarty->assign('titulo_game', $this->titulo_game);
        $this->smarty->assign('admin', $this->authHelper->isAdmin());
        $this->smarty->assign('genre', $genres);
        $this->smarty->assign('games', $games);
        $this->smarty->display('templates/ShowAllUser.tpl'); 
    }
    
    function ShowJuegosEspecifico($games,$genre){
        $this->smarty->assign('games', $games);
        $this->smarty->assign('titulo', $genre->name);
        $this->smarty->assign('descripcion', $genre->description);
        $this->smarty->display('templates/gameEspecifico.tpl'); 
    }

    function detalleJuego($game,$genre, $imagenes){
        $this->smarty->assign('game', $game);
        $this->smarty->assign('genre', $genre);
        $this->smarty->assign('imagenes', $imagenes);
        $this->smarty->assign('admin',$this->authHelper->isAdmin());
        $this->smarty->assign('user', $this->authHelper->getLogged());
        $this->smarty->display('templates/detalleJuego.tpl'); 
    }

    
    function mostrarEditar($game,$genre){
        $this->smarty = new Smarty();
        $this->smarty->assign('game', $game);
        $this->smarty->assign('genre', $genre);
        $this->smarty->display('templates/edit.tpl'); 
       
    }
    function mostrarEditarGenre($genre){
        $this->smarty = new Smarty();
        $this->smarty->assign('genre', $genre);
        $this->smarty->display('templates/editGenre.tpl'); 
       
    }

    function ShowUserLoc(){
        header("Location: ".BASE_URL.'user');
    }

}
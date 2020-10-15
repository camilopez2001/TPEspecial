<?php
    require_once 'Controller/Controller.php';
    require_once 'RouterClass.php';
    require_once 'Controller/UserController.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Logout');
    
    $r = new Router();

    // rutas
    $r->addRoute("Home", "GET", "Controller", "Home");
    $r->addRoute("Juegos", "GET", "Controller", "Games");
    $r->addRoute("insert", "POST", "Controller", "InsertGame");
    $r->addRoute("delete/:ID", "GET", "Controller", "DeleteGame");
    $r->addRoute("detalleJuego/:ID", "GET", "Controller", "DetalleJuego");
    $r->addRoute("edit/:ID", "GET", "Controller", "EditGame");
    $r->addRoute("modificar", "POST", "Controller", "Modificar");
    
    $r->addRoute("Comunidad", "GET", "Controller", "Comunidad");

    $r->addRoute("Generos", "GET", "Controller", "Genres");
    $r->addRoute("insertGenre", "POST", "Controller", "InsertGenre");
    $r->addRoute("deleteGenre/:ID", "GET", "Controller", "DeleteGenre");
    $r->addRoute("generoEspecifico/:ID", "GET", "Controller", "generoEspecifico");
    $r->addRoute("editGenre/:ID", "GET", "Controller", "EditGenre");
    $r->addRoute("modificarGenre", "POST", "Controller", "ModificarGenre");
    

    $r->addRoute("user", "GET", "Controller", "User");
    $r->addRoute("Login", "GET", "UserController", "Login");
    $r->addRoute("verificarUser", "POST", "UserController", "verificarUser");
    
    $r->addRoute("Logout", "GET", "UserController", "Logout");

   
  
    
  

    //Ruta por defecto.

    $r->setDefaultRoute("Controller", "Home");
    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>

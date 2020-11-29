<?php
    require_once 'Controller/Controller.php';
    require_once 'Controller/GenreController.php';
    require_once 'Controller/GameController.php';
    require_once 'RouterClass.php';
    require_once 'Controller/UserController.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/Logout');
    
    $r = new Router();

    // rutas
    $r->addRoute("Home", "GET", "Controller", "Home");
    $r->addRoute("comentarios", "GET", "Controller", "Comentarios");
    //detalles de un juego
    $r->addRoute("detalleJuego/:ID", "GET", "Controller", "DetalleJuego");
    //Comunidad
    $r->addRoute("Comunidad", "GET", "Controller", "Comunidad");
    //ABM DE JUEGOS
    $r->addRoute("insert", "POST", "Controller", "InsertGame"); // AMBOS USAN OTROSMODELS
    $r->addRoute("edit/:ID", "GET", "Controller", "EditGame");  // PARA REALIZARESTAS ACCIONES
    $r->addRoute("Juegos", "GET", "GameController", "Games");
    $r->addRoute("delete/:ID", "GET", "GameController", "DeleteGame");
    $r->addRoute("modificar", "POST", "GameController", "Modificar");
    
    //$r->addRoute("deleteImg/:ID", "GET", "GameController", "DeleteImg");
    
    
    $r->addRoute("imagenes/:ID", "GET", "ImagesController", "GetImages");
    $r->addRoute("deleteImg/:ID", "GET", "ImagesController", "DeleteImg");
    $r->addRoute("insertImg", "POST", "ImagesController", "InsertImgForm");
    $r->addRoute("editImg", "POST", "ImagesController", "Modificar");
    
    //Juegos de un genero
    $r->addRoute("generoEspecifico/:ID", "GET", "Controller", "generoEspecifico");
    //ABM DE GENEROS
    $r->addRoute("Generos", "GET", "GenreController", "Genres");
    $r->addRoute("insertGenre", "POST", "GenreController", "InsertGenre");
    $r->addRoute("deleteGenre/:ID", "GET", "GenreController", "DeleteGenre");
    $r->addRoute("editGenre/:ID", "GET", "GenreController", "EditGenre");
    $r->addRoute("modificarGenre", "POST", "GenreController", "ModificarGenre");
    //Boton user
    $r->addRoute("user", "GET", "Controller", "User");
    //AB de usuarios y la ista
    $r->addRoute("listaUsuarios", "GET", "UserController", "ListaUsuarios");
    $r->addRoute("editUser/:ID", "GET", "UserController", "EditUser");
    $r->addRoute("deleteUser/:ID", "GET", "UserController", "DeleteUser");
    
    //REGISTRACION, LOGIN Y LOGOUT
    $r->addRoute("registrarse", "GET", "UserController", "Registracion");
    $r->addRoute("registracionUser", "POST", "UserController", "RegistracionUser");
    $r->addRoute("Login", "GET", "UserController", "Login");
    $r->addRoute("verificarUser", "POST", "UserController", "verificarUser");
    $r->addRoute("Logout", "GET", "UserController", "Logout");

   
  
    
  

    //Ruta por defecto.
    $r->setDefaultRoute("Controller", "Home");
    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>

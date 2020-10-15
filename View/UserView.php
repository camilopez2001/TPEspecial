<?php

require_once "./libs/smarty/Smarty.class.php";

class UserView{
    private $title;
    
    function __construct(){
        $this->title = "Loguearse";
    }
    
function ShowLogin($mensaje = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_login', $this->title);
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('templates/login.tpl'); 
    }

    function mostrarLoguearse(){
        header("Location: ".BASE_URL."Login");
    }
    


    
}
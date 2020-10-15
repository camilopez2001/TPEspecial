<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";

class UserController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    function Login(){
        $this->view->ShowLogin();
       
    }

    function VerificarUser(){
        $email = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if(isset($email)){ //si hay algo en el input_user
            $usuarioFromDB = $this->model->GetUsuario($email);
            if(isset($usuarioFromDB) && $usuarioFromDB ){ 
                //si la bbdd me trae algo, existe usuario  Y no falso
                if (password_verify($pass, $usuarioFromDB->password)){
                    session_start();
                    $_SESSION["EMAIL"] = $usuarioFromDB->email;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    header("Location: ".BASE_URL."Comunidad");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }
            }else{
                $this->view->ShowLogin("El usuario no existe");
            }
        }
    }
    function Logout(){
        session_start();
        session_destroy();
        $this->view->ShowLogin();
    }
    
    }

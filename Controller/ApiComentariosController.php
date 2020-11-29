<?php

require_once "./Model/ComentarioModel.php";
require_once 'ApiController.php';
class ApiComentariosController extends ApiController{

    function __construct(){
        parent::__construct();
        $this->model = new ComentarioModel();
    }
    public function getComentarios($params = null){
        $id =  $params[':ID'];
        $comentarios = $this->model->GetComentariosJuego($id);
        $this->view->response($comentarios,200);
    }
    public function DeleteComentario($params = null){
        $id =  $params[':ID'];
        $comentarios = $this->model->DeleteComentario($id);
        if(!$comentarios){ 
            $this->view->response("Borrado",200);
        }
        else{
            $this->view->response("No existe",404);
        }
       
    }
    public function InsertComentario($params = null){
        $body = $this->getData();
        $comentario = $this->model->InsertComentario($body->comentario,$body->valoracion,$body->id_juego,$body->id_usuario_fk); 
        if (!empty($comentario)) // verifica si la tarea existe
            $this->view->response( $this->model->GetComentario($comentario), 201);
        else
            $this->view->response("El comentario no se pudo insertar", 404);
  
    }
    
    
}
<?php

require_once 'Controller/ApiComentariosController.php';
require_once 'RouterClass.php';
$r = new Router();


$r->addRoute("comentarios", "POST", "ApiComentariosController", "InsertComentario");
$r->addRoute("comentarios/:ID", "GET", "ApiComentariosController", "getComentarios");
$r->addRoute("comentario/:ID", "DELETE", "ApiComentariosController", "DeleteComentario");


//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
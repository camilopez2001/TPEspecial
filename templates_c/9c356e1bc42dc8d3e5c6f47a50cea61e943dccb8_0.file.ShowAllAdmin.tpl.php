<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 07:11:06
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\ShowAllAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83e56aa8e4f6_48405110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c356e1bc42dc8d3e5c6f47a50cea61e943dccb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\ShowAllAdmin.tpl',
      1 => 1602479455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f83e56aa8e4f6_48405110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h1><?php echo $_smarty_tpl->tpl_vars['titulo_game']->value;?>
</h1>
<div class="container">

        <ul class="list-group">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['game']->value->precio <= 0) {?>
                    <li class="list-group-item "><a href="detalleJuego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</a><span class="badge badge-primary badge-pill" >Gratis</span> <button type="button" class="btn btn-outline-danger"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">Borrar</a></button>
                    <button type="button" class="btn btn-warning"><a href="edit/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">Editar</a></button></li>
                <?php } else { ?>
                    <li class="list-group-item "><a href="detalleJuego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</a><span class="badge badge-primary badge-pill" >$<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</span> <button type="button" class="btn btn-outline-danger"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">Borrar</a></button>
                    <button type="button" class="btn btn-warning"><a href="edit/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">Editar</a></li>    
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </ul>
</div>
 <div class="container">
                <form action="insert" method="post">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="input_precio">
                    </div>
                    <div>
                        <label for="opciones">Version
                            <select id="opciones" name="input_version">
                                <option value="alfa">Alfa</option>
                                <option value="beta">Beta</option>
                                <option value="candidata">Versión candidata</option>
                                <option value="gold"> Gold</option>
                            </select>
                        </label>
                    </div>
                 
                    <div class="form-group">
                        <label for="memoria">Memoria del juego</label>
                        <input type="number" class="form-control" id="memoria" name="input_memoria">
                    </div>
                    <div>
                        <label for="opciones">Genero
                            <select id="opciones" name="input_genre">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genre']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['gen']->value->name;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
    </div>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo_genre']->value;?>
</h1>
<div class="container">

        <ul class="list-group">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genre']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
                <li class="list-group-item " ><a href="generoEspecifico/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['gen']->value->name;?>
</a><button type="button" class="btn btn-outline-danger"><a href="deleteGenre/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
">Borrar</a></button>
                    <button type="button" class="btn btn-warning"><a href="editGenre/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
">Editar</a></button></li>    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </ul>
</div>
 <div class="container">
                <form action="insertGenre" method="post">
                    <div class="form-group">
                        <label for="name">Titulo del Genero</label>
                        <input class="form-control" id="name" name="input_name">
                      
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input  class="form-control" id="description" name="input_description">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
    </div>

    <button type="button" class="btn btn-outline-danger"><a href="Logout">Cerrar Sesion</a></button>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

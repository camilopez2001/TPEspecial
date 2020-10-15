<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 07:54:17
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\editGenre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83ef89aa6037_60981064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597e4ed9eccd9727b9fc7517991a0e7edb70e593' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\editGenre.tpl',
      1 => 1602482046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f83ef89aa6037_60981064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <div class="container">
                <form action="modificarGenre" method="post">
                <div class="form-group">
                        <input type="hidden" id="genre_id" name="genre_id" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id;?>
">
                    </div>
                    <div class="form-group">
                        <label for="name">Titulo del Genero</label>
                        <input class="form-control" id="name" name="input_name" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->name;?>
">
                      
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input  class="form-control" id="description" name="input_description" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->description;?>
">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
    </div>
    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

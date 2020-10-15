<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 01:18:19
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8392bbe278d2_60204190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b7bfeeaa9d31b245cb269abd562f81848045051' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\game.tpl',
      1 => 1602458294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8392bbe278d2_60204190 (Smarty_Internal_Template $_smarty_tpl) {
?> <body>
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
</div><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 05:58:12
  from 'C:\xampp\htdocs\TPEWEB2\templates\Genres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87c8d4795980_50229640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd83c3c1824e3c7f2794cb2fd30848b8c626b04b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\Genres.tpl',
      1 => 1602726706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f87c8d4795980_50229640 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MUESTRA LOS GENEROS SIN BOTONES -->
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
                <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark" ><a href="generoEspecifico/<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['gen']->value->name;?>
</a></li>    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </ul>
</div><?php }
}
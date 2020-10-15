<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 01:22:13
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\genre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8393a5494073_06893761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '889bc22cc9cde2cdfd39990eb07e5fdb9a84a10e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\genre.tpl',
      1 => 1602458530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8393a5494073_06893761 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
</a></li>    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </ul>
</div><?php }
}

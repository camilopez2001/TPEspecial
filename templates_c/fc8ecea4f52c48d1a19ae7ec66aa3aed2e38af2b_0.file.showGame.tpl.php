<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 01:19:14
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8392f236a779_71009944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc8ecea4f52c48d1a19ae7ec66aa3aed2e38af2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\showGame.tpl',
      1 => 1602458346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:game.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8392f236a779_71009944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:game.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

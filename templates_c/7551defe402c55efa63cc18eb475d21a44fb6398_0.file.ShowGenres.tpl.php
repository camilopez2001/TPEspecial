<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 01:42:31
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\ShowGenres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f839867202809_44541433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7551defe402c55efa63cc18eb475d21a44fb6398' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\ShowGenres.tpl',
      1 => 1602459744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Genres.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f839867202809_44541433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:Genres.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

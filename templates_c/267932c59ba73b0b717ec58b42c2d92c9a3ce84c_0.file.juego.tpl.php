<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 07:26:33
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f868c092c46a4_77611091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '267932c59ba73b0b717ec58b42c2d92c9a3ce84c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\juego.tpl',
      1 => 1602653188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f868c092c46a4_77611091 (Smarty_Internal_Template $_smarty_tpl) {
?> <h1>Titulo : <?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</h1>
    <div class="container">
      <?php ob_start();
echo $_smarty_tpl->tpl_vars['game']->value->precio;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?>
       <h3>Precio: Gratis</h3>
      <?php } else { ?>
        <h3>Precio: $<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</h3>
      <?php }?>

        <h3>La version del juego es <?php echo $_smarty_tpl->tpl_vars['game']->value->version;?>
</h3>
        <h3>Ocupa un espacio total de <?php echo $_smarty_tpl->tpl_vars['game']->value->memoria;?>
 GB</h3>
        <h3>Genero: <?php echo $_smarty_tpl->tpl_vars['genre']->value->name;?>
</h3>
   </div><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 11:14:51
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\detalleJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86c18b4d3af1_52474400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0751faa7e1f9f1f201088b7bab78b4772d62779' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\detalleJuego.tpl',
      1 => 1602666810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f86c18b4d3af1_52474400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <h1>Titulo : <?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
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
   </div>
<a href="home">Volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 04:35:49
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\showGames.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87b585748731_72546825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c6c6f5175a5ee4138cedbc0475f0f5a91c0b314' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\showGames.tpl',
      1 => 1602726731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f87b585748731_72546825 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark"><a href="detalleJuego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</a><span class="badge badge-primary badge-pill" >Gratis</span> </li>
                <?php } else { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark"><a href="detalleJuego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</a><span class="badge badge-primary badge-pill" >$<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</span> </li>    
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </ul>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

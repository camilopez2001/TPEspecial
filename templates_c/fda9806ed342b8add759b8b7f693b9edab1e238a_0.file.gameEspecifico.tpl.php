<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 06:16:08
  from 'C:\xampp\htdocs\TPEWEB2\templates\gameEspecifico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87cd089c8cc6_92757220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fda9806ed342b8add759b8b7f693b9edab1e238a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\gameEspecifico.tpl',
      1 => 1602735362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f87cd089c8cc6_92757220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  


 <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
 <h5><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</h5>
    <div class="container">

        <ul class="list-group">
        <?php if ($_smarty_tpl->tpl_vars['games']->value == null) {?> 
         <h4>¡Proximamente juegos de esta categoria!</h4>
        <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
                
            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark"><a href="detalleJuego/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</a></li>    
            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </ul>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

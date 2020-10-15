<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 19:35:59
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f809f7fd98c36_27785589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34c5865e8e03b24f0ced1a385123f70bc7e80eb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\home.tpl',
      1 => 1601850694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:genre.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f809f7fd98c36_27785589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:genre.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    


 <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
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
">Borrar</a></button></li>    
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

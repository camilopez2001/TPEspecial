<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 05:58:17
  from 'C:\xampp\htdocs\TPEWEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87c8d9e11f71_17233830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1000d52bc70586d5345806057182b8dc62c899' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\login.tpl',
      1 => 1602460294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f87c8d9e11f71_17233830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo_login']->value;?>
</h1>
<div class="container">
    <form action="verificarUser" method="post">
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" id="pass" name="input_user" >
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="input_pass">
            </div>    
             <button type="submit" class="btn btn-primary">Login</button>
             <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
             
    </form>
</div>
            
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

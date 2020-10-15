<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 01:51:37
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f839a89cf03f2_06285350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb11269f74857f2b18834bc37cf78f88137c4da6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\login.tpl',
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
function content_5f839a89cf03f2_06285350 (Smarty_Internal_Template $_smarty_tpl) {
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

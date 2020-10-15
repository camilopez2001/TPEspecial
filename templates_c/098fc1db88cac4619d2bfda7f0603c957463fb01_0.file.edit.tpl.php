<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 06:14:57
  from 'C:\xampp\htdocs\TPEWEB2\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87ccc14a05a3_73764543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098fc1db88cac4619d2bfda7f0603c957463fb01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEB2\\templates\\edit.tpl',
      1 => 1602735292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f87ccc14a05a3_73764543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <div class="container">
                <form action="modificar" method="post">
                    <div class="form-group">
                        <input type="hidden" id="game_id" name="input_id" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">
                    </div>
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input class="form-control" id="title" name="input_title" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
">
                      
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="input_precio" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
">
                    </div>
                    <div>
                        <label for="opciones">Version
                            <select id="opciones" name="input_version" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->version;?>
">
                                <option value="alfa">Alfa</option>
                                <option value="beta">Beta</option>
                                <option value="candidata">Versión candidata</option>
                                <option value="gold"> Gold</option>
                            </select>
                        </label>
                    </div>
                 
                    <div class="form-group">
                        <label for="memoria">Memoria del juego</label>
                        <input type="number" class="form-control" id="memoria" name="input_memoria" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->memoria;?>
">
                    </div>
                    <div>
                        <label for="opciones">Genero
                            <select id="opciones" name="input_genre" >
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genre']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
                                <!--if equals idgame idgenre = select -->
                                <?php if ($_smarty_tpl->tpl_vars['game']->value->id_genre == $_smarty_tpl->tpl_vars['gen']->value->id) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
" selected="selected" ><?php echo $_smarty_tpl->tpl_vars['gen']->value->name;?>
</option>
                                <?php }?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['gen']->value->name;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" >Modificar</button>
                </form>
    </div>
    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

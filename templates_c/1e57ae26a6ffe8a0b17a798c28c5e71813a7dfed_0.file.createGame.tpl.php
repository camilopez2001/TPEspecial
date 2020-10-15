<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 19:41:46
  from 'C:\xampp\htdocs\TrabajoCamiWeb\templates\createGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80a0dacd85a4_78936359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e57ae26a6ffe8a0b17a798c28c5e71813a7dfed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoCamiWeb\\templates\\createGame.tpl',
      1 => 1601788284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80a0dacd85a4_78936359 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container">
                <form action="insert" method="post">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="input_precio">
                    </div>
                    <div>
                        <label for="opciones">Version
                            <select id="opciones" name="input_version">
                                <option value="alfa">Alfa</option>
                                <option value="beta">Beta</option>
                                <option value="candidata">Versión candidata</option>
                                <option value="gold"> Gold</option>
                            </select>
                        </label>
                    </div>
                 
                    <div class="form-group">
                        <label for="memoria">Memoria del juego</label>
                        <input type="number" class="form-control" id="memoria" name="input_memoria">
                    </div>
                    <div>
                        <label for="opciones">Genero
                            <select id="opciones" name="input_genre">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genre']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gen']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['gen']->value->name;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
    </div><?php }
}

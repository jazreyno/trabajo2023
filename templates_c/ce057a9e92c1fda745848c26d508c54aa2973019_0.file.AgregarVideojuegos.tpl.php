<?php
/* Smarty version 4.2.1, created on 2023-10-17 08:39:15
  from 'C:\xampp\htdocs\trabajojaz\templates\AgregarVideojuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652e2c139d6669_38460275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce057a9e92c1fda745848c26d508c54aa2973019' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajojaz\\templates\\AgregarVideojuegos.tpl',
      1 => 1697524509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e2c139d6669_38460275 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- chequea si esta logueado para que aparezca el agregar-->
<?php if ((isset($_SESSION['USER_ID']))) {?>
    <form method="POST" class="row g-3" action="agregar" id="form-videojuego">
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">nombre</label>
            <input class="form-control" type="text" placeholder="nombre" name="videojuego">
            <label for="inputPassword2" class="visually-hidden">genero</label>
            <input class="form-control" type="text" placeholder="genero" name="genero">

        </div>
    <div class="col-3">
            <div class="form-group">
                <label>Empresa</label>
                <select name="id_empresa" class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresa']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
"><?php echo $_smarty_tpl->tpl_vars['empresas']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
                <button type="submit" class="btn btn-warning">insertar</button>
            </div>
    </div>
    </form>
<?php }
}
}

<?php
/* Smarty version 4.2.1, created on 2023-10-17 08:39:09
  from 'C:\xampp\htdocs\trabajojaz\templates\AgregarEmpresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652e2c0def3797_55357820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01cb08e0040962e2835992f4435084ebb11f8acf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajojaz\\templates\\AgregarEmpresa.tpl',
      1 => 1697524577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e2c0def3797_55357820 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- chequea si esta logueado para que aparezca el agregar-->
<?php if ((isset($_SESSION['USER_ID']))) {?>
    <form method="POST" class="row g-3" action="agregarEmpresa" id="form-empresa">
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">nombre</label>

            <input class="form-control" type="text" placeholder="nombre" name="nombre" required>
            <label for="inputPassword2" class="visually-hidden">cotizacion</label>

            <input class="form-control" type="text" placeholder="cotizacion" name="cotizacion" required>
            <label for="inputPassword2" class="visually-hidden">fecha</label>

            <input class="form-control" type="text" placeholder="fecha_creacion" name="fecha_creacion" required>
            
            <button type="submit" class="btn btn-warning">insertar</button>
        </div>
    </form>
<?php }
}
}

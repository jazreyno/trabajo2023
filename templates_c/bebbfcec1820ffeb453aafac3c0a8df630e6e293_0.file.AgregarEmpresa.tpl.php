<?php
/* Smarty version 4.2.1, created on 2023-10-16 03:26:50
  from 'C:\xampp3\htdocs\trabajo2023\templates\AgregarEmpresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c915a3f91c8_14133577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bebbfcec1820ffeb453aafac3c0a8df630e6e293' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\trabajo2023\\templates\\AgregarEmpresa.tpl',
      1 => 1697385942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c915a3f91c8_14133577 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST" class="row g-3" action="agregarEmpresa" id="form-empresa">
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">nombre</label>
        <input class="form-control" type="text" placeholder="nombre" name="nombre">
        <label for="inputPassword2" class="visually-hidden">cotizacion</label>
        <input class="form-control" type="text" placeholder="cotizacion" name="cotizacion">
        <label for="inputPassword2" class="visually-hidden">fecha</label>
        <input class="form-control" type="text" placeholder="fecha_creacion" name="fecha_creacion">
        <button type="submit" class="btn btn-warning">insertar</button>
    </div>
</form><?php }
}

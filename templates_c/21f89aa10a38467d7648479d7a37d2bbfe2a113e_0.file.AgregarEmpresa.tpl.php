<?php
/* Smarty version 4.2.1, created on 2023-10-16 05:56:21
  from 'D:\xamp\htdocs\web\trabajo2023\templates\AgregarEmpresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cb465ab9ae3_73461252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21f89aa10a38467d7648479d7a37d2bbfe2a113e' => 
    array (
      0 => 'D:\\xamp\\htdocs\\web\\trabajo2023\\templates\\AgregarEmpresa.tpl',
      1 => 1697427799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cb465ab9ae3_73461252 (Smarty_Internal_Template $_smarty_tpl) {
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

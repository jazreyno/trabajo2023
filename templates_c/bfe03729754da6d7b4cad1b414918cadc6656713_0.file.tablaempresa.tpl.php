<?php
/* Smarty version 4.2.1, created on 2023-10-16 00:47:53
  from 'C:\xampp\htdocs\trabajojaz\templates\tablaempresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c6c193468f1_01221709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfe03729754da6d7b4cad1b414918cadc6656713' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajojaz\\templates\\tablaempresa.tpl',
      1 => 1697410072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:AgregarEmpresa.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652c6c193468f1_01221709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:AgregarEmpresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Empresas</h1>

<table class="table table-success table-striped-columns" id="tabla">
<th> empresas </th> 
<th> cotizacion </th>
<th> fecha de creacion</th>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresa']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
      <tr>
      <td><a href="empresas/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
">  <?php echo $_smarty_tpl->tpl_vars['empresas']->value->nombre;?>
 </a></td> 
       <td><?php echo $_smarty_tpl->tpl_vars['empresas']->value->cotizacion;?>
 </td> 
       <td><?php echo $_smarty_tpl->tpl_vars['empresas']->value->fecha_creacion;?>
 </td> 
       <td><a href='eliminarEmpresa/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
'class="btn btn-danger" > Eliminar </a></td>
       <td><a href='editarEmpresaform/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
'class="btn btn-success"> Editar </a></td>
       </tr>
     
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

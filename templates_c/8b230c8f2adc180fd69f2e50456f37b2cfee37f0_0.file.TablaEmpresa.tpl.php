<?php
/* Smarty version 4.2.1, created on 2023-10-17 03:02:19
  from 'C:\xampp3\htdocs\trabajo2023\templates\TablaEmpresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ddd1b50ce73_08148776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b230c8f2adc180fd69f2e50456f37b2cfee37f0' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\trabajo2023\\templates\\TablaEmpresa.tpl',
      1 => 1697504435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:AgregarEmpresa.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652ddd1b50ce73_08148776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:AgregarEmpresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
' class="btn btn-danger"> Eliminar </a></td>
      <!--yo-->
      <td><a href='editarEmpresaform/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
' class="btn btn-success"> Editar </a></td>

      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      
 
</table>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

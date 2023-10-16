<?php
/* Smarty version 4.2.1, created on 2023-10-16 00:44:30
  from 'C:\xampp\htdocs\trabajojaz\templates\editEmpresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c6b4e0d9ae4_48049341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95beb1946bed3a7beda0818bc69ac883246dbd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajojaz\\templates\\editEmpresa.tpl',
      1 => 1697409869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652c6b4e0d9ae4_48049341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresa']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
        <form method="POST" action='editarEmpresaform/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
'>
    <label>Nombre</label>
    <input  type="text" name="nombre_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->nombre;?>
"></input>
    <input  type="numbre" name="cotizacion_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->cotizacion;?>
"></input>
    <input  name="fecha_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->fecha_creacion;?>
"></input>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
    <input type="submit" value="editar"></input>
    </form>
<?php }
}

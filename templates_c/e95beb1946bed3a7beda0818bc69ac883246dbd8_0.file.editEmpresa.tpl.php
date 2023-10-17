<?php
/* Smarty version 4.2.1, created on 2023-10-17 08:58:14
  from 'C:\xampp\htdocs\trabajojaz\templates\editEmpresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652e30861ff850_09048809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95beb1946bed3a7beda0818bc69ac883246dbd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajojaz\\templates\\editEmpresa.tpl',
      1 => 1697520336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652e30861ff850_09048809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresa']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
        <form method="POST" action='editarEmpresa'>
    <label>Nombre</label>
    <input  type="text" name="nombre_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->nombre;?>
">
    <label>Cotizacion</label>
    <input  type="int" name="cotizacion_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->cotizacion;?>
">
    <label>Año creacion</label>
    <input  name="fecha_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->anio_creacion;?>
">
    
    <input type="hidden" name="empresa_id" value=<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  

    <input type="submit" value="editar">
    </form>


    <?php }
}

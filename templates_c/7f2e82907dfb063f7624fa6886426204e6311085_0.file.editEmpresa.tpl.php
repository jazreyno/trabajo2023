<?php
/* Smarty version 4.2.1, created on 2023-10-16 06:33:23
  from 'D:\xamp\htdocs\web\trabajo2023\templates\editEmpresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cbd131093d0_17695204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f2e82907dfb063f7624fa6886426204e6311085' => 
    array (
      0 => 'D:\\xamp\\htdocs\\web\\trabajo2023\\templates\\editEmpresa.tpl',
      1 => 1697430802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652cbd131093d0_17695204 (Smarty_Internal_Template $_smarty_tpl) {
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
">
    <input  type="nombre" name="cotizacion_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->cotizacion;?>
">
    <input  name="fecha_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->fecha_creacion;?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
    <input type="submit" value="editar">
    </form>
<?php }
}

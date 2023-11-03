<?php
/* Smarty version 4.2.1, created on 2023-10-17 02:59:04
  from 'C:\xampp3\htdocs\trabajo2023\templates\editEmpresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ddc58417997_68121422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f61362f678f9c304d915101f9998c921c480f064' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\trabajo2023\\templates\\editEmpresa.tpl',
      1 => 1697502373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652ddc58417997_68121422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresa']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
        <form method="POST" action='editarEmpresaform'>
    <label>Nombre</label>
    <input  type="text" name="nombre_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->nombre;?>
">
    <input  type="nombre" name="cotizacion_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->cotizacion;?>
">
    <input  name="fecha_edit" value="<?php echo $_smarty_tpl->tpl_vars['empresas']->value->fecha_creacion;?>
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

<?php
/* Smarty version 4.2.1, created on 2023-10-16 00:08:27
  from 'C:\xampp\htdocs\trabajojaz\templates\editVideojuegos2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c62db9aaf73_63126704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b469bf3d3937ca373d93d5cdb9b02a3711cae757' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajojaz\\templates\\editVideojuegos2.tpl',
      1 => 1697407706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652c62db9aaf73_63126704 (Smarty_Internal_Template $_smarty_tpl) {
?><select name="empresa_edit" class="form-control">
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

<input type="submit">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

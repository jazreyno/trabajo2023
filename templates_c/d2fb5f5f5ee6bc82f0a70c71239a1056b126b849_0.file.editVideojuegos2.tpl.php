<?php
/* Smarty version 4.2.1, created on 2023-10-16 20:50:11
  from 'D:\xamp\htdocs\web\trabajo2023\templates\editVideojuegos2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d85e3936005_70796414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2fb5f5f5ee6bc82f0a70c71239a1056b126b849' => 
    array (
      0 => 'D:\\xamp\\htdocs\\web\\trabajo2023\\templates\\editVideojuegos2.tpl',
      1 => 1697482210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652d85e3936005_70796414 (Smarty_Internal_Template $_smarty_tpl) {
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

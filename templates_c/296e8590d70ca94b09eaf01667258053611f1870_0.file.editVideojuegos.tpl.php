<?php
/* Smarty version 4.2.1, created on 2023-10-17 00:03:22
  from 'D:\xamp\htdocs\web\trabajo2023\templates\editVideojuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652db32a17cf19_42980407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '296e8590d70ca94b09eaf01667258053611f1870' => 
    array (
      0 => 'D:\\xamp\\htdocs\\web\\trabajo2023\\templates\\editVideojuegos.tpl',
      1 => 1697493791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652db32a17cf19_42980407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videojuegos']->value, 'videojuego');
$_smarty_tpl->tpl_vars['videojuego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['videojuego']->value) {
$_smarty_tpl->tpl_vars['videojuego']->do_else = false;
?>
         <form method="POST" action='actualizarJuego'>
          <input type="text" name="videojuego_edit" placeholder="videojuego" value='<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->videojuego;?>
' required>
          <input type="text" name="genero_edit" placeholder="genero" value='<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->genero;?>
' required>
          <input type="hidden" name="videojuego_id" value=<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id_videojuegos;?>
>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
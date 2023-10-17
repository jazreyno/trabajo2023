<?php
/* Smarty version 4.2.1, created on 2023-10-17 08:41:35
  from 'C:\xampp\htdocs\trabajojaz\templates\vervideojuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652e2c9fefa8a8_47081484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '918ef4d074ce252ad36a583afc7cd4448de038c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajojaz\\templates\\vervideojuego.tpl',
      1 => 1697524895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652e2c9fefa8a8_47081484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table table-success table-striped-columns" id="tabla">
<h1> DETALLES </h1>
<th> nombre </th>
<th> genero </th>
<th> empresa </th>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videojuegos']->value, 'videojuego');
$_smarty_tpl->tpl_vars['videojuego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['videojuego']->value) {
$_smarty_tpl->tpl_vars['videojuego']->do_else = false;
?>
    <tr>
        <td>  <?php echo $_smarty_tpl->tpl_vars['videojuego']->value->videojuego;?>
 </td> 
        <td>  <?php echo $_smarty_tpl->tpl_vars['videojuego']->value->genero;?>
 </td> 
        <td><a href="verEmpresaId/<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id_empresa;?>
 ">  <?php echo $_smarty_tpl->tpl_vars['videojuego']->value->nombre;?>
 </a></td>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <td><a href='editarProductosForm/<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id_empresa;?>
'class="btn btn-success"  type="sumbit"> Editar</a></td>
            <?php }?>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

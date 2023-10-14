<?php
/* Smarty version 4.2.1, created on 2023-10-14 03:51:35
  from 'C:\xampp\htdocs\web\TRABAJO ESPECIAL\trabajo2023-prueba\templates\tablaVideojuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6529f4275d1be2_11594656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ba047f57a7d0fe40b31c40e9b9ff8156a59691' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TRABAJO ESPECIAL\\trabajo2023-prueba\\templates\\tablaVideojuegos.tpl',
      1 => 1697242342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6529f4275d1be2_11594656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Videojuegos</h1>
<table class="table table-success table-striped-columns" id="tabla">
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
              <td><a href="verProductoMarca/<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id_empresa;?>
 ">  <?php echo $_smarty_tpl->tpl_vars['videojuego']->value->nombre;?>
 </a></td>  
              <td><a href='verProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
'class="btn btn-info" id="eliminar" type="sumbit"> ver mas </a></td> 
              <?php if ((isset($_SESSION['USER_ID']))) {?>
              <td><a href='borrarProductos/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
'class="btn btn-danger"  type="sumbit"> Eliminar </a></td>
              <td><a href='editarProductosForm/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
'class="btn btn-success" type="sumbit"> Editar</a></td>    
              <?php }?>
      </tr>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   

 </table>

 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

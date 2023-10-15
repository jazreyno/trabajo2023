<?php
/* Smarty version 4.2.1, created on 2023-10-15 16:27:34
  from 'C:\xampp3\htdocs\trabajo2023\templates\TablaVideojuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652bf6d66fddd0_78964353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6620c403b5ada7ee973952362e991c8d4b38b6df' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\trabajo2023\\templates\\TablaVideojuegos.tpl',
      1 => 1697380048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652bf6d66fddd0_78964353 (Smarty_Internal_Template $_smarty_tpl) {
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
              <td><a href="vervideojuego/<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id_empresa;?>
 ">  <?php echo $_smarty_tpl->tpl_vars['videojuego']->value->nombre;?>
 </a></td>  
              <td><a href='videojuegoid/<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id_videojuegos;?>
'class="btn btn-info" id="eliminar" type="sumbit"> ver mas </a></td>     
              <td><a href='eliminarvideojuego/<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id_videojuegos;?>
'class="btn btn-danger"  type="sumbit"> Eliminar </a></td>
              <td><a href='editarVideojuegosform/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
'class="btn btn-success" type="sumbit"> Editar</a></td>    
             
      </tr>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   

 </table>

 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

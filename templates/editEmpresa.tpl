{include file="header.tpl"}

{foreach from=$empresa item=$empresas}
    {*en el form pongo el metodo y la accion de mi router*}
    <form method="POST" action='editarEmpresaform/{$empresas->id_empresa}'>
    <label>Nombre</label>
    <input  type="text" name="nombre_edit" value="{$empresas->nombre}">
    <input  type="nombre" name="cotizacion_edit" value="{$empresas->cotizacion}">
    <input  name="fecha_edit" value="{$empresas->fecha_creacion}">
{/foreach}
  
    <input type="submit" value="editar">
    </form>

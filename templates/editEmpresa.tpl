{include file="header.tpl"}

{foreach from=$empresa item=$empresas}
    {*en el form pongo el metodo y la accion de mi router
    
    nombre_edit
    cotizacion_edit
    fecha_edit
    *}
    <form method="POST" action='editarEmpresa'>
    <label>Nombre</label>
    <input  type="text" name="nombre_edit" value="{$empresas->nombre}">
    <label>Cotizacion</label>
    <input  type="int" name="cotizacion_edit" value="{$empresas->cotizacion}">
    <label>Año creacion</label>
    <input  name="fecha_edit" value="{$empresas->anio_creacion}">
    
    <input type="hidden" name="empresa_id" value={$empresas->id_empresa}>
{/foreach}
  

    <input type="submit" value="editar">
    </form>


    
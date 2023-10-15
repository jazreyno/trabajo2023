{include file="header.tpl"}

{foreach from=$empresa item=$empresas}
  {*en el form pongo el metodo y la accion de mi router*}
  <form method="POST" action='editarEmpresaform/{$empresas->id_empresa}'>
 <input  name="nombre_edit" value="{$empresa->nombre}"></input>
 <input  name="cotizacion_edit" value="{$empresa->cotizacion}"></input>
 <input  name="fecha_edit" value="{$empresa->fecha_creacion}"></input>
{/foreach}
</select>
<input type="submit">
</form>
{include file="footer.tpl"}
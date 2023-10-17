{include file="header.tpl"}
{include file="AgregarEmpresa.tpl"}

<h1>Empresas</h1>

<table class="table table-success table-striped-columns" id="tabla">
<th> Empresa </th> 
<th> Cotizacion </th>
<th> Año de Creacion</th>
{foreach from=$empresa item=$empresas}
      <tr>
            <td><a href="empresas/{$empresas->id_empresa}">  {$empresas->nombre} </a></td> 
            <td>${$empresas->cotizacion} </td> 
            <td>{$empresas->anio_creacion} </td> 
            
            {if isset($smarty.session.USER_ID)}
            <td><a href='eliminarEmpresa/{$empresas->id_empresa}' class="btn btn-danger"> Eliminar </a></td>
            <td><a href='editarEmpresaform/{$empresas->id_empresa}' class="btn btn-success"> Editar </a></td>
            {/if}
      </tr>
{/foreach}
      
 
</table>
{include file='templates/footer.tpl'}
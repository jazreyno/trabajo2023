{include file="header.tpl"}
<h1>Empresas</h1>

<table class="table table-success table-striped-columns" id="tabla">
<th> empresas </th> 
{foreach from=$empresa item=$empresas}
   
       <tr> <td><a href="empresas/{$empresas->id_empresa} ">  {$empresas->nombre} </a></td>  
       <td><a href='eliminarEmpresa/{$empresas->id_empresa}'class="btn btn-danger" > Eliminar </a></td>
       <td><a href='editarMarcasForm/{$marca->id_marcas}'class="btn btn-success"> Editar </a></td>
       </tr>
     
 {/foreach}
 
</table>
{include file="footer.tpl"}

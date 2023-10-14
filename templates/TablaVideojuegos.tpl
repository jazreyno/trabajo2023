{include file="header.tpl"}
<h1>Videojuegos</h1>
<table class="table table-success table-striped-columns" id="tabla">
<th> nombre </th>
<th> genero </th>
<th> empresa </th>
 {foreach from=$videojuegos item=$videojuego}
     
      <tr> 
              <td>  {$videojuego->videojuego} </td> 
              <td>  {$videojuego->genero} </td> 
              <td><a href="verProductoMarca/{$videojuego->id_empresa} ">  {$videojuego->nombre} </a></td>  
              <td><a href='videojuegoid/{$videojuego->id_videojuegos}'class="btn btn-info" id="eliminar" type="sumbit"> ver mas </a></td> 
              {if isset($smarty.session.USER_ID)}
              <td><a href='borrarProductos/{$producto->id_productos}'class="btn btn-danger"  type="sumbit"> Eliminar </a></td>
              <td><a href='editarProductosForm/{$producto->id_productos}'class="btn btn-success" type="sumbit"> Editar</a></td>    
              {/if}
      </tr>
 {/foreach}   

 </table>

 {include file="footer.tpl"}

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
              <td><a href="vervideojuego/{$videojuego->id_empresa} ">  {$videojuego->nombre} </a></td>  
              <td><a href='videojuegoid/{$videojuego->id_videojuegos}'class="btn btn-info" id="eliminar" type="sumbit"> ver mas </a></td>     
              <td><a href='eliminarvideojuego/{$videojuego->id_videojuegos}'class="btn btn-danger"  type="sumbit"> Eliminar </a></td>
              <td><a href='editarVideojuegosform/{$producto->id_productos}'class="btn btn-success" type="sumbit"> Editar</a></td>    
             
      </tr>
 {/foreach}   

 </table>

 {include file="footer.tpl"}

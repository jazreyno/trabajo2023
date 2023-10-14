{include file="header.tpl"}
<table class="table table-success table-striped-columns" id="tabla">
<h1> DETALLES </h1>
<th> videojuego </th>
<th> genero </th>
<th> empresa </th>
{foreach from=$videojuegos item=$videojuego}
    <tr>
        <td>  {$videojuego->videojuego} </td> 
        <td>  {$videojuego->genero} </td> 
            <td>{$videojuego->nombre}</td>
            {if isset($smarty.session.USER_ID)}
            <td><a href='editarProductosForm/{$videojuego->id_empresa}'class="btn btn-success"  type="sumbit"> Editar</a></td>
            {/if}
    </tr>
{/foreach}
</table>



{include file="footer.tpl"}
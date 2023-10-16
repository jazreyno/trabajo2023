{include file="header.tpl"}

{foreach from=$videojuegos item=$videojuego}
         <form method="POST" action='actualizarJuego'>
          <input type="text" name="videojuego_edit" placeholder="videojuego" value='{$videojuego->videojuego}' required>
          <input type="text" name="genero_edit" placeholder="genero" value='{$videojuego->genero}' required>
          <input type="hidden" name="videojuego_id" value={$videojuego->id_videojuegos}>
{/foreach}


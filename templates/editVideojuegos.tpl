{include file="header.tpl"}

{foreach from=$videojuegos item=$videojuego}
         <form method="POST" action='editarProductos/{$videojuego->id_videojuegos}'>
          <input type="text" name="videojuego_edit" placeholder="videojuego" value='{$videojuego->videojuego}' required>
          <input type="number" name="genero_edit" placeholder="genero" value='{$videojuego->genero}' required>
  {/foreach}

<!-- chequea si esta logueado para que aparezca el agregar-->
{if isset($smarty.session.USER_ID)}
    <form method="POST" class="row g-3" action="agregar" id="form-videojuego">
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">nombre</label>
            <input class="form-control" type="text" placeholder="nombre" name="videojuego">
            <label for="inputPassword2" class="visually-hidden">genero</label>
            <input class="form-control" type="text" placeholder="genero" name="genero">

        </div>
    <div class="col-3">
            <div class="form-group">
                <label>Empresa</label>
                <select name="id_empresa" class="form-control">
                {foreach from=$empresa item=$empresas }
                    <option value="{$empresas->id_empresa}">{$empresas->nombre}</option>
                {/foreach}
                </select>
            </div>
                <button type="submit" class="btn btn-warning">insertar</button>
            </div>
    </div>
    </form>
{/if}
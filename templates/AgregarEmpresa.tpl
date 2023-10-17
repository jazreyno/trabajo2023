<!-- chequea si esta logueado para que aparezca el agregar-->
{if isset($smarty.session.USER_ID)}
    <form method="POST" class="row g-3" action="agregarEmpresa" id="form-empresa">
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">nombre</label>

            <input class="form-control" type="text" placeholder="nombre" name="nombre" required>
            <label for="inputPassword2" class="visually-hidden">cotizacion</label>

            <input class="form-control" type="text" placeholder="cotizacion" name="cotizacion" required>
            <label for="inputPassword2" class="visually-hidden">fecha</label>

            <input class="form-control" type="text" placeholder="fecha_creacion" name="fecha_creacion" required>
            
            <button type="submit" class="btn btn-warning">insertar</button>
        </div>
    </form>
{/if}
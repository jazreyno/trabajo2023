{include 'templates/header.tpl'} 

<h1>Login</h1>
<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validar">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" required class="form-control" id="contraseña" name="password">
        </div>

        {if $error} 
            <div class='alert alert-danger' role='alert'>
                {$error}
            </div> 
        {/if} 
       
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>

{include 'templates/footer.tpl'} 



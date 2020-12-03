
{include file="header.tpl"}
<h1>{$titulo_login}</h1>
<div class="container">
    <form action="verificarUser" method="post">
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" id="user" name="input_user" >
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="input_pass">
            </div>
            <div class="form-group">
            <button type="submit" class="botonEstilo btnColor2">Login</button>
            <button type="submit" class="botonEstilo btnColor2"><a href="registrarse">Registrarse</a></button>
            </div>
            {if $mensaje}
                <div class="alert alert-danger" role="alert">{$mensaje}</div>
            {/if}
             
    </form>
    
</div>

            
{include file="footer.tpl"}
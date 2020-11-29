{include file="header.tpl"}
<h1>{$registracion}</h1>
<div class="container">
    <form action="registracionUser" method="post">
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="input_email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" id="user" name="input_user">
        </div>   
        <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="input_password">
        </div>
        <div class="form-group">
            <button class="botonEstilo btnColor2">Registrarse</button>  
        </div>
     {if $mensaje}
                <div class="alert alert-danger" role="alert">{$mensaje}</div>
            {/if} 
    </form>
   
</div> 

{include file="footer.tpl"}
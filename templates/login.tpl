
{include file="header.tpl"}
<h1>{$titulo_login}</h1>
<div class="container">
    <form action="verificarUser" method="post">
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" id="pass" name="input_user" >
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="input_pass">
            </div>    
             <button type="submit" class="btn btn-primary">Login</button>
             <p>{$mensaje}</p>
             
    </form>
</div>
            
{include file="footer.tpl"}
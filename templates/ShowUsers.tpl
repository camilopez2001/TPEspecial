{include file="header.tpl"}


<h1>{$titulo}</h1>
<div class="container">
   <ul class="list-group">
            {foreach from=$users item=user}
            {if $user->id neq $userSession}
                <li class="list-group-item " >{$user->user}<button type="button" class="btn btn-danger"><a href="deleteUser/{$user->id}">Borrar</a></button>
                {if $user->admin eq 0}
                    <button type="button" class="btn btn-warning"><a href="editUser/{$user->id}">Hacer Admin</a></button></li>
                {else}
                    <button type="button" class="btn btn-warning"><a href="editUser/{$user->id}">Hacer Usuario</a></button></li>
                {/if}  
             {/if}         
            {/foreach}
          <button type="button" class="botonEstilo btnColor4"><a href="user">Volver</a></button>
        </ul>
    
</div>
{include file="footer.tpl"}

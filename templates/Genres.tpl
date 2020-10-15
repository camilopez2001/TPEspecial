<!-- MUESTRA LOS GENEROS SIN BOTONES -->
<h1>{$titulo_genre}</h1>
<div class="container">

        <ul class="list-group">

            {foreach from=$genre item=gen}
                <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark" ><a href="generoEspecifico/{$gen->id}">{$gen->name}</a></li>    
            {/foreach}
          
        </ul>
</div>
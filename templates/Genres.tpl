<!-- MUESTRA LOS GENEROS SIN BOTONES -->
<h1>{$titulo_genre}</h1>
<div class="container">

        <ul class="list-group">

            {foreach from=$genre item=gen}
                <li class="list-group-item " ><a href="generoEspecifico/{$gen->id}">{$gen->name}</a></li>    
            {/foreach}
          
        </ul>
</div>
{include file="header.tpl"}
{include file="Genres.tpl"}    

{if $games}
 <h1>{$titulo}</h1>
    <div class="container">

        <ul class="list-group">
              
           {foreach from=$games item=game}
                <li class="list-group-item "><a href="detalleJuego/{$game->id}">{$game->title}</a><span class="badge badge-primary badge-pill" >Gratis</span> </li>    
            {/foreach}
         
        </ul>
    </div>
{/if}
{include file="footer.tpl"}
{include file="header.tpl"}

<h1>{$titulo_game}</h1>
<div class="container">

        <ul class="list-group">

            {foreach from=$games item=game}
                {if $game->precio le 0}
                    <li class="list-group-item "><a href="detalleJuego/{$game->id}">{$game->title}</a><span class="badge badge-primary badge-pill" >Gratis</span> </li>
                {else}
                    <li class="list-group-item "><a href="detalleJuego/{$game->id}">{$game->title}</a><span class="badge badge-primary badge-pill" >${$game->precio}</span> </li>    
                {/if}
            {/foreach}
          
        </ul>
        
</div>

{include file="footer.tpl"}
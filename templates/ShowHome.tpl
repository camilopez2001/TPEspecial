{include file="header.tpl"}
{include file="Genres.tpl"}    


 <h1>{$titulo}</h1>
    <div class="container">

        <ul class="list-group">
        
            {foreach from=$games item=game}
               
                {if $game->precio le 0}
                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark"><a href="detalleJuego/{$game->id}">{$game->title}</a><span class="badge badge-primary badge-pill" >Gratis</span> </li>    
                {/if}
            {/foreach}
          
        </ul>
    </div>
{include file="footer.tpl"}
{include file="header.tpl"}  


 <h1>{$titulo}</h1>
 <h5>{$descripcion}</h5>
    <div class="container">

        <ul class="list-group">
        {if $games eq null} 
         <h4>¡Proximamente juegos de esta categoria!</h4>
        {/if}
            {foreach from=$games item=game}
                
            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark"><a href="detalleJuego/{$game->id}">{$game->title}</a></li>    
            
            {/foreach}
          
        </ul>
    </div>
{include file="footer.tpl"}
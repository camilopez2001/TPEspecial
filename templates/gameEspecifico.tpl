{include file="header.tpl"}  

<div class="container">

 <h1>{$titulo}</h1>
 <h5>{$descripcion}</h5>
    
        <ul class="list-group">
        {if $games eq null} 
         <h4>¡Proximamente juegos de esta categoria!</h4>
        {/if}
            {foreach from=$games item=game}
                
            <li class="list-group-item"><a href="detalleJuego/{$game->id}">{$game->title}</a></li>    
            
            {/foreach}
          
        </ul>
    </div>
{include file="footer.tpl"}

{include file="header.tpl"}
 <h1>Titulo : {$game->title}</h1>
    <div class="container">
      {if {$game->precio} eq 0}
       <h3>Precio: Gratis</h3>
      {else}
        <h3>Precio: ${$game->precio}</h3>
      {/if}

        <h3>La version del juego es {$game->version}</h3>
        <h3>Ocupa un espacio total de {$game->memoria} GB</h3>
        <h3>Genero: {$genre->name}</h3>
   </div>
<a href="home">Volver</a>
{include file="footer.tpl"}
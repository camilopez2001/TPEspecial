
{include file="header.tpl"}
  <h1>Titulo : {$game->title}</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        {if $imagenes neq null}
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              {foreach from=$imagenes item=imagen}
                {if $imagen@first}
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{$imagen->path}">
                  </div>
                {else}
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{$imagen->path}">
                  </div>
                {/if}
              {/foreach}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      {/if }     
    </div>
    <div class="col-md-8">
      {if {$game->precio} eq 0}
        <h3>Precio: Gratis</h3>
      {else}
        <h3>Precio: ${$game->precio}</h3>
      {/if}
      <h3>La version del juego es {$game->version}</h3>
      <h3>Ocupa un espacio total de {$game->memoria} GB</h3>
      <h3>Genero: {$genre->name}</h3>
      {include file="ShowComents.tpl" links=$game}
    </div>
    
  </div>

{include file="footer.tpl"}
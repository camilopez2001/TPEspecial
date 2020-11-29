
{include file="header.tpl"}
  <h1>Titulo : {$game->title}</h1>
  <div class="container">
    <div class="col-md-4">      
      {foreach from=$imagenes item=imagen}
        <img src="{$imagen->path}"  alt="{$imagen->id} slide" class="img-thumbnail">
      {/foreach}
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
    </div>
    {include file="ShowComents.tpl" links=$game}
    <button type="button" class="botonEstilo btnColor4"><a href="user">Volver</a></button>
  </div>

{include file="footer.tpl"}
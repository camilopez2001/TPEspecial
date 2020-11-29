
{include file="header.tpl"}
<h1>Titulo : {$game->title}</h1>
<div class="container">
  <div class="row">
    {if $game->image != null} 
      <div class="col-md-4">
        <img src="{$game->image}" class="img-thumbnail" > 
        
        <button type="button" class="botonEstilo btnColor3"><a href="deleteImg/{$game->id}">Eliminar</a></button>
        
      </div>
    {/if}
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
  </div>
  {include file="ShowComents.tpl" links=$game}
  <button type="button" class="botonEstilo btnColor4"><a href="user">Volver</a></button>
</div>

{include file="footer.tpl"}
{include file="header.tpl"}

<h1>{$titulo}</h1>
<div class="container">
  {if $imagenes neq null}
    {foreach from=$imagenes item=imagen}
      <img src="{$imagen->path}" class="imagenes">
      <button type="button" class="botonEstilo btnColor3"><a href="deleteImg/{$imagen->id}">Eliminar</a></button>
      <form action="editImg" method="post" enctype="multipart/form-data">
        <div>
          <label for="image">Inserte imagen</label>
          <input type="file" name="input_img" id="imageUpload">
          <input type="hidden" name="input_id_img" value="{$imagen->id}">
          <input type="hidden" name="input_path" value="{$imagen->path}">
        </div>
        <button type="submit" class="botonEstilo btnColor1">Editar</button>
      </form>
    {/foreach}
  {else}
    <p>Aun no hay imagenes disponibles</p>           
  {/if}
  <form action="insertImg" method="post" enctype="multipart/form-data">
    <div>
      <label for="image">Inserte imagen</label>
      <input type="file" id="imagenes" name="imagenes[]" multiple>
      <input type="hidden" id="game_id" name="input_id" value="{$id_game}">
    </div>
    <button type="submit" class="botonEstilo btnColor1">Agregar</button>
  </form> 
</div>
{include file="footer.tpl"}
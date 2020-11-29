{include file="header.tpl"}

  <h1>{$titulo_game}</h1>
<div class="container">

        <ul class="list-group">

            {foreach from=$games item=game}
                {if $game->precio le 0}
                    <li class="list-group-item "><a href="detalleJuego/{$game->id}">{$game->title}</a><span class="badge badge-primary badge-pill" >Gratis</span> <button type="button" class="btn btn-danger"><a href="delete/{$game->id}">Borrar</a></button>
                    <button type="button" class="btn btn-warning"><a href="edit/{$game->id}">Editar</a></button></li>
                {else}
                    <li class="list-group-item "><a href="detalleJuego/{$game->id}">{$game->title}</a><span class="badge badge-primary badge-pill" >${$game->precio}</span> <button type="button"  class="btn btn-danger"><a href="delete/{$game->id}">Borrar</a></button>
                    <button type="button" class="btn btn-warning"><a href="edit/{$game->id}">Editar</a></li>    
                {/if}
            {/foreach}
          
        </ul>
</div>
<div class="container">
                <form action="insert" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="input_precio">
                    </div>
                    <div>
                        <label for="opciones">Version
                            <select id="opciones" name="input_version">
                                <option value="alfa">Alfa</option>
                                <option value="beta">Beta</option>
                                <option value="candidata">Versión candidata</option>
                                <option value="gold"> Gold</option>
                            </select>
                        </label>
                    </div>
                 
                    <div class="form-group">
                        <label for="memoria">Memoria del juego</label>
                        <input type="number" class="form-control" id="memoria" name="input_memoria">
                    </div>
                    <div>
                        <label for="opciones">Genero
                            <select id="opciones" name="input_genre">
                            {foreach from=$genre item=gen}
                                <option value="{$gen->id}">{$gen->name}</option>
                            {/foreach}
                            </select>
                        </label>
                    </div>
                    {if $admin}
                        <div>
                            <label for="image">Inserte imagen</label>
                            <input type="file" name="input_name" id="imageToUpload">
                        </div>
                    {/if}
                    
                    <button type="submit" class="botonEstilo btnColor1">Agregar</button>
                </form>
    </div>

<h1>{$titulo_genre}</h1>
<div class="container">

        <ul class="list-group">

            {foreach from=$genre item=gen}
                <li class="list-group-item " ><a href="generoEspecifico/{$gen->id}">{$gen->name}</a><button type="button"  class="btn btn-danger"><a href="deleteGenre/{$gen->id}">Borrar</a></button>
                    <button type="button" class="btn btn-warning"><a href="editGenre/{$gen->id}">Editar</a></button></li>    
            {/foreach}
          
        </ul>
</div>
 <div class="container">
                <form action="insertGenre" method="post">
                    <div class="form-group">
                        <label for="name">Titulo del Genero</label>
                        <input class="form-control" id="name" name="input_name">
                      
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input  class="form-control" id="description" name="input_description">
                    </div>
                      <div class="form-group">
                    <button type="submit" class="botonEstilo btnColor1">Agregar</button>
                    </div>
                </form>
    </div>
<div class="container">
    <button type="button" class="botonEstilo btnColor3"><a href="Logout">Cerrar Sesion</a></button>
    {if $admin}
        <button type="button" class="botonEstilo btnColor4"><a href="listaUsuarios">Lista de usuarios</a></button>
    {/if}
   
</div>
{include file="footer.tpl"}
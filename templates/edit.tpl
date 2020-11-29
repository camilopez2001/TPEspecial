
{include file="header.tpl"}
 <div class="container">
                <form action="modificar" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" id="game_id" name="input_id" value="{$game->id}">
                    </div>
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input class="form-control" id="title" name="input_title" value="{$game->title}">
                      
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="input_precio" value="{$game->precio}">
                    </div>
                    <div>
                        <label for="opciones">Version
                            <select id="opciones" name="input_version" value="{$game->version}">
                                <option value="alfa">Alfa</option>
                                <option value="beta">Beta</option>
                                <option value="candidata">Versión candidata</option>
                                <option value="gold"> Gold</option>
                            </select>
                        </label>
                    </div>
                 
                    <div class="form-group">
                        <label for="memoria">Memoria del juego</label>
                        <input type="number" class="form-control" id="memoria" name="input_memoria" value="{$game->memoria}">
                    </div>
                    <div>
                        <label for="opciones">Genero
                            <select id="opciones" name="input_genre" >
                            {foreach from=$genre item=gen}
                                {if $game->id_genre eq $gen->id}
                                <option value="{$gen->id}" selected="selected" >{$gen->name}</option>
                                {/if}
                                <option value="{$gen->id}">{$gen->name}</option>
                            {/foreach}
                            </select>
                        </label>
                    </div>
                    {if $admin}
                    <div>
                        <label for="image">Inserte imagen</label>
                        <input type="file" name="input_image" id="imageUpload">
                        <input type="hidden" name="input_img" value="{$game->image}">
                    </div>  
                    {/if} 
                    <button type="submit" class="btn btn-primary" >Modificar</button>
                </form>
    </div>
    

{include file="footer.tpl"}
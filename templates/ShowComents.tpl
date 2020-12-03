<div class="container">
    <div class="container">
        
        <ul id="comentarios-list" class="list-group">
        </ul>
        <input type="hidden" id="juego" name="input_juegos" value="{$game->id}">
    </div>    

    <div class="container">
        <form id= "form-comentario"  method="post">
            {if $user} 
                <div class="form-group">
                    <label for="comentario">Comentario</label>
                    <input class="form-control" id="comentario" >
                </div>
                <div>
                    <label for="valoracion">Valoracion
                        <select id="valoracion" name="input_valoracion">
                            <option value="1">⭐</option>
                            <option value="2">⭐⭐</option>
                            <option value="3">⭐⭐⭐</option>
                            <option value="4">⭐⭐⭐⭐</option>
                            <option value="5">⭐⭐⭐⭐⭐</option>
                        </select>
                    </label>
                </div>
                <input type="hidden" id="user"  value="{$user}">
                <input type="hidden" id="admin" value="{$admin}">
                <div class="form-group">
                    <button type="submit" class="botonEstilo btnColor1">Agregar</button>
                </div>
            {/if}    
        </form>
    </div>
    
</div>

<script src="js/comentarios.js"></script>

{include file="header.tpl"}
 <div class="container">
                <form action="modificarGenre" method="post">
                <div class="form-group">
                        <input type="hidden" id="genre_id" name="genre_id" value="{$genre->id}">
                    </div>
                    <div class="form-group">
                        <label for="name">Titulo del Genero</label>
                        <input class="form-control" id="name" name="input_name" value="{$genre->name}">
                      
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input  class="form-control" id="description" name="input_description" value="{$genre->description}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
    </div>
    

{include file="footer.tpl"}
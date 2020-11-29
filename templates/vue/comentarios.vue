{literal}
<div id="vue-comentarios">

    <ul id="comentario-list" class="list-group">
        <li 
            v-for="comentario in comentarios"
            :data-id-comentario="comentario.id" 
            v-bind:class="{'list-group-item-success': task.completed == 1}"
            class="list-group-item"> 
            
            {{ task.title }} - {{ task.description}}
         </li>
    </ul>

</div>
{/literal}
"use strict"

document.addEventListener('DOMContentLoaded', () =>{
    getComentarios();
    document.querySelector('#form-comentario').addEventListener('submit', e=>{
        e.preventDefault();
        addComentario();
    })
   
})

function getComentarios() {
    const id_juego = document.getElementById('juego').value;
    fetch('http://localhost/TPEWEB2/api/comentarios/'+id_juego)
        .then(response => response.json()) //responde json
        .then(comentarios => render(comentarios))
        .catch(error => console.log(error));
}

function render(comentarios){
    const container = document.querySelector('#comentarios-list');
    container.innerHTML = "";
    for(let comentario of comentarios){
        let estrellitas= comentario.valoracion;
        let estrella="";
        for(let i=0; i<estrellitas;i++){
            estrella+="⭐";
        }
        container.innerHTML += `<li class="list-group-item ">${comentario.comentario}  - Valoracion: ${estrella}
        <button value=${comentario.id} id='btnBorrar'>Borrar</button></li>`
       
    }
    let botonBorrar = document.querySelectorAll("#btnBorrar");
    for (let elemt of botonBorrar){
        elemt.addEventListener("click", DeleteComentario);
    }
        
}

function DeleteComentario() {
    let id_comentario = this.value;
    
    fetch('http://localhost/TPEWEB2/api/comentario/'+id_comentario, {
        method: 'DELETE'
    })
        .then(getComentarios())
        .catch(error => console.log(error));

}

function addComentario(){
    const comentarios = {
        comentario: document.querySelector('input[name="input_comentario"]').value,
        valoracion: document.getElementById('valoracion').value,
        id_juego: document.getElementById('juego').value,
        id_usuario_fk: document.getElementById('user').value
    }

    fetch('http://localhost/TPEWEB2/api/comentarios', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(comentarios)
    })
        .then(response => response.json())
        .then(comentarios => getComentarios())
        .catch(error => console.log(error));

}

/*
let app = new Vue({
    el: '#vue-comentarios',
    data: {
        comentarios: []  
    }
});

document.addEventListener('DOMContentLoaded', () => {
    getTasks();

    document.querySelector('#form-comentario').addEventListener('submit', e => {
        // evita el envio del form default
        e.preventDefault();

        addTask();
    });

});

function getComentarios() {
    fetch('api/comentarios')
        .then(response => response.json()) //responde json
        .then(comentarios => render(comentarios))
        .catch(error => console.log(error));
}

function addTask() {

    const comentarios = {
        comentario: document.querySelector('input[name="input_comentario"]').value,
        valoracion: document.querySelector('input[name="input_valoracion"]').value,
        id_juego: document.querySelector('input[name="input_juegos"]').value
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(task)
    })
        .then(response => response.json())
        .then(comentarios => app.comentarios.push(comentarios))
        .catch(error => console.log(error));

}


*/''
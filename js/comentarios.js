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
    fetch('api/comentarios/'+id_juego)
        .then(response => response.json()) //responde json
        .then(comentarios => render(comentarios))
        .catch(error => console.log(error));
}

function render(comentarios){
    const container = document.querySelector('#comentarios-list');
    container.innerHTML = "";
    for(let comentario of comentarios){
        container.innerHTML += `<li class="list-group-item "> @${comentario.user.toUpperCase()}<p class="comentarios">${comentario.comentario} ${estrellas(comentario.valoracion)}</p></li>`
        if(admin()){
            container.innerHTML += `<div><button value=${comentario.IDcomentario} id='btnBorrar' class="btn btn-danger">Borrar</button></div></li>`
        }
    }
    let botonBorrar = document.querySelectorAll("#btnBorrar");
    for (let elemt of botonBorrar){
        elemt.addEventListener("click", DeleteComentario);
    }
        
}
function admin(){
    let admin =  document.getElementById('admin');
    if(admin!=null){
        return admin.value;
    }
    return false;
}
function estrellas(cantidad){
    let estrella="";
    for(let i=0; i<cantidad;i++){
        estrella+="⭐";
    }
    return estrella;
}
function DeleteComentario() {
    fetch('api/comentario/'+this.value, {
        method: 'DELETE'
    })
        .then(getComentarios())
        .catch(error => console.log(error));
}

function addComentario(){
    const comentarios = {
        comentario: document.getElementById('comentario').value,
        valoracion: document.getElementById('valoracion').value,
        id_juego: document.getElementById('juego').value,
        id_usuario_fk: document.getElementById('user').value
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(comentarios)
    })
        .then(response => response.json())
        .then(comentarios => getComentarios())
        .catch(error => console.log(error));

}

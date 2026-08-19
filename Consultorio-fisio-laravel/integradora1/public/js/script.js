const botonModo = document.getElementById("modo");

botonModo.addEventListener("click", function(){

    document.body.classList.toggle("dark-mode");

    if(document.body.classList.contains("dark-mode")){

        botonModo.innerHTML="☀️ Modo claro";

    }else{

        botonModo.innerHTML="🌙 Modo oscuro";

    }

});

// Agarramos el formulario y el párrafo donde vamos a avisar.const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");
const mensajeExito = document.querySelector("#mensaje-exito");


// Función que revisa el formulario antes de enviarlo.
function revisarPedido(event) 
{
    // Si existe un mensaje de éxito anterior,
    // lo ocultamos cuando el usuario intenta enviar nuevamente.
    if (mensajeExito) {
        mensajeExito.style.display = "none";
    }


    // Obtenemos los valores escritos en los campos.
    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();


    // Revisamos que exista un nombre.
    if (nombre === "") {

        event.preventDefault();

        avisoPedido.textContent = "Falta tu nombre, caserito.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

        return;
    }


    // Revisamos que el correo tenga un @.
    if (correo.includes("@") === false) {

        event.preventDefault();

        avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

        return;
    }


    // Si JavaScript no encuentra errores,
    // NO usamos preventDefault().
    //
    // El formulario continúa normalmente y Laravel
    // será quien haga la validación definitiva.

    avisoPedido.textContent = "";
    avisoPedido.classList.remove("error");
}
    

if (formularioPedido) {
    formularioPedido.addEventListener("submit", revisarPedido);
}

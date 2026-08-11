const botonModo = document.getElementById("modo");

botonModo.addEventListener("click", function(){

    document.body.classList.toggle("dark-mode");

    if(document.body.classList.contains("dark-mode")){

        botonModo.innerHTML="☀️ Modo claro";

    }else{

        botonModo.innerHTML="🌙 Modo oscuro";

    }

});

// Agarramos el formulario y el párrafo donde vamos a avisar.
const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");

// La función recibe el evento como parámetro. Se llama "event"
// por costumbre; es la información de lo que acaba de pasar.
function revisarPedido(event) 
{
  // Freno de mano: sin esta línea la página se recarga y no
  // llegamos ni a revisar. Es LA línea nueva del día.
    

    // .value es lo que hay escrito adentro de la casilla, ahora.
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "") {

    event.preventDefault();
    // Dos comillas pegadas significan "texto vacío": no escribió nada.
    avisoPedido.textContent = "Falta tu nombre, caserito.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
    } else if (correo.includes("@") === false) {
    // includes revisa si un texto contiene otro. No comprueba que
    // el correo exista: comprueba que PAREZCA un correo.
    event.preventDefault();
    avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
    } else {
    // Pasó las dos revisiones: recién ahí avisamos que está bien.
    avisoPedido.textContent = "Pedido recibido, caserito. Te contactamos hoy.";
    avisoPedido.classList.add("exito");
    avisoPedido.classList.remove("error");
    }
}

// Igual que en las dos misiones anteriores: seleccionar, escuchar,
// reaccionar. Lo único que cambia es el nombre del evento.
// Y la función va SIN paréntesis, como siempre.
formularioPedido.addEventListener("submit", revisarPedido);




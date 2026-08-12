const formulario = document.querySelector("#form-cita");
const aviso = document.querySelector("#aviso-cita");

function validarCita(event) 
{
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const consulta = document.querySelector("#consulta").value;

    if (nombre === "" || correo === "") {

        event.preventDefault();

        aviso.textContent = "Completa tu nombre y tu correo para reservar la cita.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    } 
    else if (!correo.includes("@")) {

        event.preventDefault();
        aviso.textContent = "Ese correo está mal escrito: le falta el arroba.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    } 
    else {

        aviso.textContent = "Cita reservada - te atiende Kevin Yasmani Toledo Apulaca";
        aviso.classList.add("exito");
        aviso.classList.remove("error");
    }
}

formulario.addEventListener("submit", validarCita);
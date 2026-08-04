function confirmarTurno()
{
    let mensaje = document.querySelector("#mensaje");
    mensaje.textContent = "Turno recibido - te atiende Kevin Yasmani Toledo Apulaca";
    mensaje.classList.remove("oculto");
}
let boton = document.querySelector("#btn-confirmar");
boton.addEventListener("click", confirmarTurno);
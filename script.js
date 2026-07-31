const botonModo = document.getElementById("modo");

botonModo.addEventListener("click", function(){

    document.body.classList.toggle("dark-mode");

    if(document.body.classList.contains("dark-mode")){

        botonModo.innerHTML="☀️ Modo claro";

    }else{

        botonModo.innerHTML="🌙 Modo oscuro";

    }

});

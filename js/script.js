function verificarDatos() {
    let operacion = document.querySelector("#operacion");
    let mensaje = document.querySelector("#mensaje");

    operacion = operacion.options[operacion.selectedIndex].value;
    if (operacion == "") {
        let mensaje = document.querySelector("#mensaje-alerta");
        mensaje.classList.add("show")
        mensaje.innerHTML = "Por favor, seleccione una opcion del menu";
        return false;
    } else {
        let mensaje = document.querySelector("#mensaje-alerta");
        mensaje.classList.add("fade")
    }
    let num1 = document.querySelector("#num1").value;
    let num2 = document.querySelector("#num2").value;

    if (num1 == "" || num2 == "") {
        let mensaje = document.querySelector("#mensaje-alerta");
        mensaje.classList.add("show")
        mensaje.innerHTML = "Por favor, ingresa ambos valores";
        return false;
    }

    return true;
}
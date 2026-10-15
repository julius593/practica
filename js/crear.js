// Revisa un campo: si está vacío muestra la alerta y devuelve true
function estaVacio(campo, etiqueta) {
    if (campo.value.trim() === "") {
        Swal.fire({
            icon: "error",
            title: "Campo vacío",
            text: etiqueta + " no puede ir vacío."
        }).then(function () {
            campo.focus();
        });
        return true;
    }
    return false;
}

function validar() {
    // Se guardan los ELEMENTOS (no solo su valor) para poder usar .focus()
    var ci = document.getElementById("ci");
    var nombre = document.getElementById("nombre");
    var correo = document.getElementById("correo");
    var contrasena = document.getElementById("contrasena");

    if (estaVacio(ci, "El CI")) return false;
    if (estaVacio(nombre, "El nombre")) return false;
    if (estaVacio(correo, "El correo")) return false;
    if (estaVacio(contrasena, "La contraseña")) return false;

    return true; // todo bien: se envía el formulario
}

 

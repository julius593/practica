var form = document.getElementById('formUsuarios');
 
// Muestra u oculta el error de un campo y pinta el borde
function marcar(id, mensaje) {
    const input = document.getElementById(id);
    document.getElementById('error-' + id).textContent = mensaje;
 
    input.classList.toggle('invalido', mensaje !== '');
    input.classList.toggle('valido', mensaje === '');
}
 
// Cada función devuelve un mensaje de error, o '' si el campo está bien
var reglas = {
    ci(valor) {
        if (valor === '') return 'El CI es obligatorio.';
        if (!/^[0-9]{6,10}$/.test(valor)) return 'El CI debe tener entre 6 y 10 dígitos.';
        return '';
    },
 
    nombre(valor) {
        if (valor === '') return 'El nombre es obligatorio.';
        if (!/^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/.test(valor)) return 'Solo se permiten letras y espacios.';
        if (valor.split(/\s+/).length < 2) return 'Escribe al menos un nombre y un apellido.';
        return '';
    },
 
    correo(valor) {
        if (valor === '') return 'El correo es obligatorio.';
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valor)) return 'El correo no es válido.';
        return '';
    },
 
    contrasena(valor) {
        if (valor === '') return 'La contraseña es obligatoria.';
        if (valor.length < 6) return 'Mínimo 6 caracteres.';
        if (!/[A-Za-z]/.test(valor) || !/[0-9]/.test(valor)) return 'Debe incluir letras y números.';
        return '';
    }
};
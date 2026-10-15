// Cada regla devuelve un mensaje de error, o '' si el campo está bien
const reglas = {
    ci(valor) {
        if (valor === '') return 'El CI no puede ir vacío.';
        if (!/^[0-9]{6,10}$/.test(valor)) return 'El CI debe tener entre 6 y 10 dígitos.';
        return '';
    },
    nombre(valor) {
        if (valor === '') return 'El nombre no puede ir vacío.';
        if (!/^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/.test(valor)) return 'El nombre solo puede tener letras y espacios.';
        if (valor.split(/\s+/).length < 2) return 'Escribe al menos un nombre y un apellido.';
        return '';
    },
    correo(valor) {
        if (valor === '') return 'El correo no puede ir vacío.';
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valor)) return 'El correo no es válido.';
        return '';
    },
    contrasena(valor) {
        if (valor === '') return 'La contraseña no puede ir vacía.';
        if (valor.length < 6) return 'La contraseña necesita mínimo 6 caracteres.';
        if (!/[A-Za-z]/.test(valor) || !/[0-9]/.test(valor)) return 'La contraseña debe incluir letras y números.';
        return '';
    }
};

function validar() {
    const errores = [];
    let primerInvalido = null;

    for (const id in reglas) {
        const input = document.getElementById(id);
        // La contraseña no se recorta; los demás campos sí
        const valor = id === 'contrasena' ? input.value : input.value.trim();
        const mensaje = reglas[id](valor);

        input.classList.toggle('invalido', mensaje !== '');

        if (mensaje !== '') {
            errores.push(mensaje);
            if (!primerInvalido) primerInvalido = input;
        }
    }

    if (errores.length > 0) {
        Swal.fire({
            icon: 'error',
            title: 'Revisa el formulario',
            html: '<ul style="text-align:left">' +
                  errores.map(e => '<li>' + e + '</li>').join('') +
                  '</ul>'
        }).then(() => primerInvalido.focus());

        return false; // cancela el envío
    }

    return true; // deja enviar el formulario
}


 

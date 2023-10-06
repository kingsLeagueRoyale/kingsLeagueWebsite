// login.js
document.addEventListener("DOMContentLoaded", function() {
    // Ocultar el formulario de registro al cargar la página
    document.getElementById("register-form").style.display = "none";
    document.getElementById("login-button").style.display = "none";
});

function mostrarFormularioRegistro() {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("login-button").style.display = "block";
    document.getElementById("register-form").style.display = "block";
    document.getElementById("register-button").style.display = "none";    
}

function mostrarFormularioLogin() {
    document.getElementById("login-form").style.display = "block";
    document.getElementById("login-button").style.display = "none";
    document.getElementById("register-form").style.display = "none";    
    document.getElementById("register-button").style.display = "block";
}

function validarRegistro() {
    // Obtener valores de los campos
    var username = document.getElementById("register_username").value.trim();
    var email = document.getElementById("register_email").value.trim();
    var password = document.getElementById("register_password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    // Definir un array para almacenar mensajes de error
    var errors = [];

    // Validar que los campos no estén en blanco
    if (username === "" || email === "" || password === "" || confirmPassword === "") {
        errors.push("Todos los campos son obligatorios.");
    }

    // Validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        errors.push("El correo electrónico no es válido.");
    }

    // Validar la contraseña
    if (password.length < 8 || !/[A-Z]/.test(password) || !/[0-9]/.test(password)) {
        errors.push("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.");
    }

    // Validar que las contraseñas coincidan
    if (password !== confirmPassword) {
        errors.push("Las contraseñas no coinciden.");
    }

    // Mostrar mensajes de error si existen
    if (errors.length > 0) {
        var errorContainer = document.getElementById("error-container");
        errorContainer.innerHTML = ""; // Limpiar mensajes anteriores
        for (var i = 0; i < errors.length; i++) {
            var errorItem = document.createElement("p");
            errorItem.textContent = errors[i];
            errorContainer.appendChild(errorItem);
        }
        return false; // Evitar que se envíe el formulario
    }

    return true; // Enviar el formulario si no hay errores
}
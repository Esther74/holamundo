function mostrarContrasena() {
    var inputContrasena = document.getElementById("contrasena");
    

    // Mostrar la contraseña en el campo de texto visible
    inputContrasenaVisible.value = inputContrasena.value;

    // Limpiar el campo de texto visible después de 2 segundos (ajusta el tiempo según sea necesario)
    setTimeout(function() {
        inputContrasenaVisible.value = "";
    }, 2000);  // 2000 milisegundos = 2 segundos
}






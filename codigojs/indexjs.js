function mostrarContrasena() {
    var inputContrasena = document.getElementById("contrasena");
   
    
    inputContrasena.type = "text";
   

    // Limpiar el campo de texto visible
    setTimeout(function() {
        
        inputContrasena.type = "password";
    }, 2000);  // 2000 milisegundos = 2 segundos
}





    
    
    







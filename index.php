<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>    
        <meta charset="UTF-8">
        <title>conexion a una base de datos</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="codigojs/indexjs.js"></script>
       
        
    </head>
    <body>
        <?php
        // put your code here
        echo "ya funciona php 2023<br>";
        
        
        ?>
        

    <h2>Formulario Clientes</h2>
    <form action="agregar_cliente.php" method="post" onsubmit="validarFormulario(event)">
        <!-- Otros campos del formulario aquí -->

         
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" oninput="mostrarContrasena()" required>
            
   

        <!-- Otros elementos del formulario aquí -->

        <div class="buttons">
            <input type="submit" value="Enviar">
        </div>
    </form>



        
        
        
        
        <br>
        <a href="conexion.php">Conexion</a>
    </body>
</html>

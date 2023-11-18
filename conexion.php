
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hipopresiva</title>
        
        <link rel="stylesheet" href="css/style.css">
        <script src="codigojs/codigojs.js"></script>
  
    </head>
    <body>
        <?php
        
        $servername = "localhost";
        $database = "hipopresiva";
        $username = "root";
        $password = "admin";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Conexion exitosa<br>";
        
        $sql = "SELECT id,nombre FROM alumnos";
        $resultado = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($resultado) > 0){
            echo "<table border='1'>";
            echo "<tr>";
                echo "<th>ID</th><th>NOMBRE</th>";
            echo "</tr>";
            
            
            while($fila = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td><td>" . $fila['nombre'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        
        mysqli_close($conn);
        
        
        ?>


        <h1>Cambia el Color</h1>
        <p>Haz clic en el botón.</p>

        <button id="cambiarColorBtn">Cambiar Color</button>

    </body>
</html>

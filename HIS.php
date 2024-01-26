<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HISTORIAL</title>
</head>
<body>
    <h1>HISTORIAL DE REGISTROS DE LOS SENSORES</h1>
       <p>Ultimas entradas:</p>
    <div>
       <?php
        require 'Conexion.php';
        $table = 'Data';
        $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 20";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
             echo "<table border='1'>
                <tr>
                <th>ID</th>
                <th>TEMPERATURA</th>
                <th>HUMEDAD</th>
                </tr>";
         
            while($row = $result -> fetch_assoc()) {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["Tem"]."°C</td>
                <td>".$row["Hum"]."%</td>
                </tr>";
            }
            echo "</table>";
        }
    $conn->close();
    ?>
    </div>
    <div>
        <a href="index.php"><button>INICIO</button></a> 
    </div>
    
    </body>
    
</html>
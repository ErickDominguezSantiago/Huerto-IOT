<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INFORMACIÓN ACTUAL</title>
</head>
<body>
    <h1>INFORMACIÓN ACTUAL</h1>
      <div>
        <?php
        require 'Conexion.php';
        $table = 'Data';
        $table2= 'ValoresA';
        $sql = "SELECT * FROM $table WHERE id = (SELECT MAX(id) FROM $table)";
        $result = $conn->query($sql);
        $sql2 = "SELECT * FROM $table2 WHERE id = (SELECT MAX(id) FROM $table2)";
        $re = $conn->query($sql2);
        if ($result->num_rows > 0) {
             echo "<table border='1'>
                <tr>
                <th>ID</th>
                <th>TEMPERATURA ACTUAL</th>
                <th>HUMEDAD ACTUAL</th>
                 <th>---</th>
                <th>ID</th>
               
                <th>TEMPERATURA DE ACTUACIÓN</th>
                <th>HUMEDAD DE ACTUACIÓN</th>
                </tr>";
            $row2 = $re -> fetch_assoc();
            $row = $result -> fetch_assoc();
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["Tem"]."°C</td>
                <td>".$row["Hum"]."%</td>
                <td></td>
                <td>".$row2["id"]."</td>
                <td>".$row2["tem"]."°C</td>
                <td>".$row2["hum"]."%</td>
                </tr>";
        
            echo "</table>";
        }
    $conn->close();
    ?>
    </div>
    <a href="index.php"><button>INICIO</button></a>
</body>
</html>
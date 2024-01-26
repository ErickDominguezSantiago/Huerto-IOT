
<?php
    require 'Conexion.php';
    $table='Data';
    $table2='ValoresA';
    $valor=$_POST['valor']??null;

    if($valor!=null){
    $data = explode(",",$valor);
    
        $sql = "INSERT INTO $table (Tem, Hum) VALUES ('$data[0]', '$data[1]')";
        $conn->query($sql);
    }
    
    
    $sql2 = "SELECT * FROM $table2 WHERE id = (SELECT MAX(id) FROM $table2)";
    $RE = $conn->query($sql2);
    
    if ($RE->num_rows > 0) {
    // Mostrar los datos del último registro
    while($row = $RE->fetch_assoc()) {
       if ($data[0] <= $row['tem']) {
            echo "1";
        } else{
            echo "0";
            echo "$temC";
        }
    
        if ($data[1] <= $row['hum']) {
        // Activar el motor de la bomba de agua
        echo "1";
        }else{
            echo "0";
            echo "$humC";
        }
    }
    } else {
    echo "No se encontraron resultados.";
    }
?>


   
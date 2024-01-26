<?php
require 'Conexion.php';
$table='ValoresA';
$temC=0;
$humC=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temC = $_POST['tem'];
        $humC = $_POST['hum'];
        
    }
    if(($temC !=null)&&($humC !=null)){
         $sql = "INSERT INTO $table (tem, hum) VALUES ('$temC', '$humC')";
        $conn->query($sql);
        
    }else{
         echo'datos no insertados';
     }
       // Cerrar la conexión a la base de datos
	mysqli_close($conn);
    //imprimimos un comprobante de que ha funcionado como debe
	echo "datos en la base\t\t\t\t";
    
?>
<div>
<a href="index.php"><button>INICIO</button></a>
</div>
    
    
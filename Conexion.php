<?php

/* Conexión a base de datos */
$host_db = "localhost";//El puerto de entrada o el host name de la base de datos
$user_db = "id21372998_awa";//Usuario que responde en la base de datos
$pass_db = "123A_123a";//Contraseña requeridad para realizar consultas 
$db_name = "id21372998_historial";//nombre de la base de datos

$conn = new mysqli($host_db, $user_db, $pass_db, $db_name);

// Verificar la conexión y realizar una consulta de prueba
/*if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    $result = $conn->query("SELECT 1");
    if ($result) {
        echo "Conexión exitosa y consulta de prueba realizada correctamente.";
    } else {
        echo "Error al realizar la consulta de prueba: " . $conn->error;
    }
}*/

?>
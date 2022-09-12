<?php

// -------- Variables de conexión --------
$server = "127.0.0.1";
$database = "ejemplo_php";
$username = "root";
$password = "";
// -------- Cadena de conexión --------
$conn = mysqli_connect($server, $username, $password, $database);
// Revisar la Conexión
if(!$conn)
    die("Conexión fallida: " . mysqli_connect_error()); // Describe el error de conexión

// echo "Conexión exitosa" . '<br><br>';

?>
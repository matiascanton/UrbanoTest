<?php

// Variables para la conexion
$host = "localhost";
$user = "root"; 
$password = ""; 
$database = "urbandb"; 

// Conectar la bd
$con = new mysqli($host, $user, $password, $database);

// Chequear conexion
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
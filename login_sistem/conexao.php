<?php


$host = "localhost";
$user ="root";
$pass = "";
$bd = "senhas";

$mysqli = new mysqli($host, $user, $pass, $bd);

if($mysqli->connect_errno) {
    echo "Falha ao conectar: " . $mysqli->connect_error;
    exit();
} 

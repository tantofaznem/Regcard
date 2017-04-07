ya<?php

$servidor = "localhost";
$usuariobd = "root";
$senhabd = "TeTeTeTe123@";
$nomebd = "SRCS";


$conn = new mysqli($servidor, $usuariobd, $senhabd, $nomebd);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 
?>

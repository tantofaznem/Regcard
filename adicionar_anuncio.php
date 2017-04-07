<?php
session_start();
$current = $_SESSION['usuario'];
include 'conf_bd.php';

$assunto = $_POST['assunto'];
$descricao = $_POST['descricao'];
date_default_timezone_set('Africa/Maputo');
$dnt = date('l jS  F Y h:i:s A');

$sql = "INSERT INTO anuncios (assunto, descricao, data)
VALUES ('$assunto', '$descricao', '$dnt')";

if ($conn->query($sql) === TRUE) {
header("location:anuncios.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

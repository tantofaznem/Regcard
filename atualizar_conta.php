<?php
include 'conf_bd.php';

$nomecompleto = $_POST['nomecompleto'];
$genero = $_POST['genero'];
$endereco = $_POST['endereco'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$id = $_POST['id'];

$sql = "UPDATE usuarios SET nomecompleto ='$nomecompleto', genero='$genero', endereco='$endereco', usuario='$usuario', senha='$senha' WHERE usuarioid='$id'";

if ($conn->query($sql) === TRUE) {
header("location:sair.php");
} else {
    echo "Erro atualizando dado: " . $conn->error;
}

$conn->close();
?>

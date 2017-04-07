<?php
include 'conf_bd.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE usuarioid='$id'";

if ($conn->query($sql) === TRUE) {
header("location:usuarios.php");
} else {
    echo "Erro excluindo dado: " . $conn->error;
}

$conn->close();
?>

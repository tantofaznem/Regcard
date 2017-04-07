<?php
include 'conf_bd.php';

$id = $_GET['id'];

$sql = "DELETE FROM anuncios WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
header("location:anuncios.php");
} else {
    echo "Erro excluindo dado: " . $conn->error;
}

$conn->close();
?>

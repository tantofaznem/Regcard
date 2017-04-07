<?php

include 'conf_bd.php';

$assunto = $_POST['assunto'];
$descricao = $_POST['descricao'];
$id = $_POST['id'];

$sql = "UPDATE anuncios SET assunto='$assunto', descricao='$descricao' WHERE id ='$id'";

if ($conn->query($sql) === TRUE) {
header("location:anuncios.php");
} else {
    echo "Erro atualizando dado: " . $conn->error;
}

$conn->close();
?>

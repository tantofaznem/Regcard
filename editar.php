<?php
include 'conf_bd.php';
$primeironome = $_POST['primeironome'];
$nomedomeio = $_POST['nomedomeio'];
$ultimonome = $_POST['ultimonome'];
$genero = $_POST['genero'];
$endereco = $_POST['endereco'];
$aniversario = $_POST['aniversario'];
$telefone = $_POST['telefone'];
$id = $_POST['id'];


$sql = "UPDATE registro SET primeironome='$primeironome', nomedomeio='$nomedomeio', ultimonome='$ultimonome', endereco='$endereco', aniversario='$aniversario', telefone='$telefone'  WHERE registroid = '$id'";

if ($conn->query($sql) === TRUE) {
 header("location:explorar.php");
} else {
   echo "Erro atualizando dado: " . $conn->error;
}

$conn->close();
?>

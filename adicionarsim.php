<?php
session_start();
$current = $_SESSION['usuario'];

include 'conf_bd.php';
$code = "ID:";
$r=rand(10000000,90000000);
$id = "$code$r";

$file=$_FILES['image']['tmp_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name= addslashes($_FILES['image']['name']);
			
move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
		
$upload ="photos/" . $_FILES["image"]["name"];
$primeironome = $_POST['primeironome'];
$nomedomeio = $_POST['nomedomeio'];
$ultimonome = $_POST['ultimonome'];
$genero = $_POST['genero'];
$endereco = $_POST['endereco'];
$aniversario = $_POST['aniversario'];
$telefone = $_POST['telefone'];
date_default_timezone_set('Africa/Maputo');
$data = date('jS  F Y');

$sql = "INSERT INTO registro (registroid, primeironome, nomedomeio, ultimonome, endereco, aniversario, genero, telefone, fotografia, assinatura, data)
VALUES ('$id', '$primeironome', '$nomedomeio', '$ultimonome', '$endereco', '$aniversario', '$genero', '$telefone', '$upload', '$current', '$data')";

if ($conn->query($sql) === TRUE) {
header("location:usuario_padrao.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
session_start();
$current = $_SESSION['usuario'];

$id = $_GET['id'];
include 'conf_bd.php';

$sql = "SELECT * FROM registro where registroid = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       $primeironome = $row['primeironome'];
       $nomedomeio = $row['nomedomeio'];
       $ultimonome = $row['ultimonome'];
       $endereco = $row['endereco'];
       $aniversario = $row['aniversario'];
       $genero = $row['genero'];
       $telefone = $row['telefone'];
       $fotografia = $row['fotografia'];
       $data = $row['data'];
       $assinatura = $row['assinatura'];
    }
} else {
    echo "Sem Resultados";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Ver cartão SIM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/bootstrap.min.css">
<link rel="icon" href="images/icon.png">
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

</style>
<body>
<div class="w3-container w3-red">
  <h1>MOVITEL</h1>
</div>
  <ul class="w3-navbar w3-light-grey">
    <li><a href="administrador.php">Cartões Registrados</a></li>
    <li><a href="novousuario.php">Registrar usuário</a></li>
    <li><a href="anuncios.php">Anúncios</a></li>
    <li><a href="minhaconta.php">Atualizar conta</a></li>
    <li><a href="usuarios.php">Personalizar usuários</a></li>
<li class="w3-right"><a class="w3-green" href="sair.php">Sair (<?php echo"$current"; ?>)</a></li>
  </ul>
  <div class="container">
<h2>Ver cartão SIM</h2>
<h3 style="font-family:Courier New;"><?php echo"$id"; ?></h3>
   <ul class="w3-ul w3-card-4">
    <li class="w3-padding-16">
            <img src="<?php echo"$fotografia"; ?>" class="w3-left  w3-margin-right" style="width:150px">
      <span class="w3-large"><?php echo"$primeironome $nomedomeio $ultimonome"; ?></span><br>
      <span>Endereço: <?php echo"$endereco"; ?></span><br>
<span>Número de telefone: <?php echo"$telefone"; ?></span><br>
<span>Aniversário: <?php echo"$aniversario"; ?></span><br>
<span>Gênero: <?php echo"$genero"; ?></span><br>
<span>Data de registro: <?php echo"$data"; ?>, <?php echo"$assinatura"; ?></span><br><br>
    </li>

<?php
session_start();
$current = $_SESSION['usuario'];

include 'conf_bd.php';
$cid = $_GET['id'];

$sql = "SELECT * FROM usuarios where usuarioid = '$cid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        $nomecompleto = $row['nomecompleto'];
        $genero = $row['genero'];
        $endereco = $row['endereco'];
        $usuario = $row['usuario'];
    }
} else {
    echo "Sem resultados";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Atualizar usuário</title>
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

select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
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
<h2>Atualizar usuário</h2>
<form action="atualizar1.php" method="POST">
<br>
  <p>
  <label>Nome completo</label>
  <input  name="nomecompleto" type="text"  placeholder="Nome completo" value="<?php echo"$nomecompleto"; ?>"required></p>
    <label><b>Gênero</b></label>
  <input  name="genero" type="text"  placeholder="Gênero" value="<?php echo"$genero"; ?>"required></p>

    <label><b>Endereço</b></label>
  <input  name="endereco" type="text"  placeholder="Endereço" value="<?php echo"$endereco"; ?>"required></p>

       <label><b>Nome de usuário</b></label>
  <input  name="usuario" type="text"  placeholder="Nome de usuário" value="<?php echo"$usuario"; ?>"required></p>

<input type="hidden" name="id" value="<?php echo"$cid"; ?>">
    <button type="submit" class="w3-btn w3-red">Atualizar</button>
</form>

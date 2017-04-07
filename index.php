<!DOCTYPE html>
<html>
<title>MOVITEL | Entrar</title>
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

<center>
<h2>Bem-vindo a MOVITEL, acesse sua conta</h2>

<form action="index.php" method="POST">
  <div class="imgcontainer">
    <img src="images/logo.png" width="150" >
  </div>
</center>
  <div class="container">

<?php

  error_reporting(E_ALL ^ E_DEPRECATED);
if(isset($_POST['submit'])) {
include 'conf_bd.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios where usuario='$usuario' and senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $role = $row['cargo'];
if ($role == "Admin") {
setcookie(loggedin, date("F jS - g:i a"), $seconds);
session_start();
$_SESSION['usuario'] = $usuario;
header("location:administrador.php?usuario=$usuario");
} else {
setcookie(loggedin, date("F jS - g:i a"), $seconds);
session_start();
$_SESSION['usuario'] = $usuario;
header("location:usuario_padrao.php?usuario=$usuario");
}
    }
} else {
    print '
  <div class="w3-panel w3-red">
    <h3>Erro 404!</h3>
    <p>Conta não encontrada na Base de Dados.</p>
  </div>
';
}
$conn->close();

}
?>
    <label><b>Nome de usuário</b></label>
    <input type="text" placeholder="Insira nome de usuário" name="usuario" required>

    <label><b>Senha</b></label>
    <input type="password" placeholder="Digite a senha" name="senha" required>
        
    <button type="submit" name="submit" class="w3-btn w3-red">Entrar</button>

</form>
<p></p>
<div class="w3-container w3-red">
  <h5>&copy; 2017, Todos Termos Reservados. Por <strong>Abd Domingos</strong></h5>
</div>

<?php
session_start();
$current = $_SESSION['usuario'];
$id = $_GET['id'];
include 'conf_bd.php';

$sql = "SELECT * FROM anuncios where id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
       $assunto = $row['assunto'];
       $descricao = $row['descricao'];
    }
} else {
    echo "Sem resultados";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Atualizar Anúncio</title>
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
<h2>Atualizar Anúncio</h2>
<form action="atualizar.php" method="POST">
<br>
  <p>
  <label>Subject</label>
  <input  name="assunto" type="text"  placeholder="Inserir Assunto" value="<?php echo"$assunto"; ?>"required></p>
    <label><b>Descrição</b></label>
    <textarea name="descricao" placeholder="Inserir descrição"  required><?php echo"$descricao"; ?></textarea>
     <input type="hidden" name="id" value="<?php echo"$id"; ?>">
    <button type="submit" class="w3-btn w3-red">Atualizar</button>

       </form>


   

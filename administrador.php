<?php
session_start();
$current = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Cartões Registrados</title>
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
<h2>Cartões Registrados</h2>
<table class="w3-table-all">
    <tr>
      <th>SIM ID</th>
      <th>PRIMEIRO NOME</th>
      <th>NOME DO MEIO</th>
      <th>ÚLTIMO NOME</th>
      <th>ENDEREÇO</th>
      <th>NÚMERO DE TELEFONE</th>
      <th>VER</th>
      <th>EDITAR</th>
      <th>EXCLUIR</th>
    </tr>
<?php
  include 'conf_bd.php';

$sql = "SELECT * from registro ORDER BY data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["registroid"]. "</td><td>" . $row["primeironome"]. "</td><td>" . $row["nomedomeio"]. "</td><td>" . $row["ultimonome"]. "</td><td>" . $row["endereco"]. "</td><td>" . $row["telefone"];
       echo '</td><td><a style="font-size:12px;" class="w3-btn w3-teal" href="ver_sim2.php?id='.$row['registroid'].'">Ver</a>';
       echo '</td><td><a style="font-size:12px;" class="w3-btn w3-blue" href="editar_sim2.php?id='.$row['registroid'].'">Editar</a>';
       echo '</td><td><a style="font-size:12px;" class="w3-btn w3-red" href="excluir_sim2.php?id='.$row['registroid'].'">Excluir</a>';
    }
} else {
    print '
</table><div class="w3-panel w3-leftbar w3-light-grey">
  <p class="w3-xlarge w3-serif">
  <i><b>0</b> Registro(s) encontrado(s) na Base de Dados</i></p>
</div>';
}
$conn->close();
?>
   

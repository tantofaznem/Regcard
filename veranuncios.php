<?php
session_start();
$current = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Anúncios</title>
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
    <li><a href="usuario_padrao.php">Registar SIM</a></li>
    <li><a href="veranuncios.php">Anúncios</a></li>
    <li><a href="explorar.php">Explorar</a></li>
    <li><a href="conta.php">Mudar Senha</a></li>
 
<li class="w3-right"><a class="w3-green" href="sair.php">Sair (<?php echo"$current"; ?>)</a></li>
  </ul>
  <div class="container">
<h2>Anúncios</h2>
  <table class="w3-table-all w3-large">
    <tr>
      <th>Assunto</th>
      <th>Descrição</th>
       <th>Data</th>
    </tr>
<?php
  include 'conf_bd.php';

$sql = "SELECT * FROM anuncios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["assunto"]. "</td><td>" . $row["descricao"]. "</td><td>" . $row["data"];
    }
} else {
    print '
</table><div class="w3-panel w3-leftbar w3-light-grey">
  <p class="w3-xlarge w3-serif">
  <i><b>0</b> Anúncio(s) encontrado(s) na Base de Dados</i></p>
</div>';
}
$conn->close();
?>
  </table>

   

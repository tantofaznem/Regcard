<?php
session_start();
$current = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Mudar Senha</title>
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
<h2>Mudar Senha</h2>
<?php
if(isset($_POST['submit'])) {
include 'conf_bd.php';

$cs = $_POST['csenha'];
$ns = $_POST['nsenha'];
$usuario = $_POST['usuario'];

$sql = "SELECT * FROM usuarios where usuario ='$usuario' and senha='$cs'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       
$sql = "UPDATE usuarios SET senha ='$ns' WHERE usuario ='$usuario'";

if ($conn->query($sql) === TRUE) {
   header("location:sair.php");
} else {
    echo "Erro atualizando dado: " . $conn->error;
}




    }
} else {
    print '
  <div class="w3-panel w3-red">
    <h3>Erro!</h3>
    <p>Você digitou senha incorreta!!!</p>
  </div>
';
}
$conn->close();
}
?>
 <form action="conta.php" method="POST">
<br>
  <p>
  <label>Senha atual</label>
  <input  name="csenha" type="password"  placeholder="Digite a senha atual" required></p>

  <p>
  <label>Nova senha</label>

   <input  name="nsenha" type="password"  placeholder="Insira a nova senha" required></p>
<input type="hidden" name="usuario" value="<?php echo"$current"; ?>" >
<button type="submit" name="submit" class="w3-btn w3-red">Atualizar</button>
</form>
   

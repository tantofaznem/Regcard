<?php
session_start();
$current = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Novo Usuário</title>
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
<h2>Registrar Novo Usuário</h2>

<?php
if(isset($_POST['submit'])) {
$nomecompleto = $_POST['nomecompleto'];
$genero = $_POST['genero'];
$endereco = $_POST['endereco'];
$usuario = $_POST['usuario'];
$cargo = $_POST['cargo'];

include 'conf_bd.php';

$sql = "INSERT INTO usuarios (nomecompleto, genero, endereco, usuario, cargo)
VALUES ('$nomecompleto', '$genero', '$endereco', '$usuario', '$cargo')";

if ($conn->query($sql) === TRUE) {
 print '
  <div class="w3-panel w3-green">
    <h3>Sucesso!</h3>
    <p>Novo usuário foi registrado ... a senha padrão é definida como 123456</p>
  </div>
';
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<form action="novousuario.php" method="POST">
<br>
  <p>
  <label>Nome completo</label>
  <input  name="nomecompleto" type="text"  placeholder="Insira o nome completo" required></p>

  <p>
  <label>Gênero</label>
  <select  name="genero"  required><option>Masculino</option><option>Feminino</option></select></p>
 
<label>Endereço</label>
  <input  name="endereco" type="text" name="endereco" placeholder="Insira o endereço" required></p>
 
<label>Nome de usuário</label>
  <input  name="usuario" type="text"  placeholder="Insira nome de usuário" required></p>

 <p>
  <label>Nivel</label>
  <select name="cargo"  required><option>Admin</option><option>Usuario</option></select></p>
<button type="submit" name="submit" class="w3-btn w3-red">Registrar</button>
</form>
   
<br><br>
<?php
  
?>
   

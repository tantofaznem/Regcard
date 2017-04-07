<?php
session_start();
$current = $_SESSION['usuario'];

$myid = $_GET['id'];
include 'conf_bd.php';

$sql = "SELECT * FROM registro where registroid = '$myid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $primeironome = $row['primeironome'];
       $nomedomeio = $row['nomedomeio'];
       $ultimonome= $row['ultimonome'];
       $endereco = $row['endereco'];
       $aniversario = $row['aniversario'];
       $genero = $row['genero'];
       $telefone = $row['telefone'];
       
    }
} else {
    echo "Sem Resultados";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Editar Cartão</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/bootstrap.min.css">
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
 
<style>
input[type=text], input[type=password] , input[type=number]{
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
<h2>Editar cartão SIM</h2>
<form action="editar.php" method="POST" enctype="multipart/form-data" name="addroom">
<label><b>Primeiro nome</b></label>
    <input type="text" placeholder="Insira o primeiro nome" value="<?php echo"$primeironome"; ?>" name="primeironome" required>

    <label><b>Nome do meio</b></label>
    <input type="text" placeholder="Insira o nome do meio" value="<?php echo"$nomedomeio"; ?>" name="nomedomeio" required>

    <label><b>Último nome</b></label>
    <input type="text" placeholder="Insira o sobrenome" value="<?php echo"$ultimonome"; ?>" name="ultimonome" required>

    <label><b>Gênero</b></label>
    <input type="text" placeholder="Insira o gênero" value="<?php echo"$genero"; ?>" name="genero">

    <label><b>Endereço</b></label>
    <input type="text" placeholder="Insira o endereço" value="<?php echo"$endereco"; ?>"name="endereco" required>

<label><b>Aniversário</b></label>
<input type="text" id="datepicker" name="aniversario" value="<?php echo"$aniversario"; ?>"placeholder="11/03/2016" required>

    <label><b>Número de telefone</b></label>
    <input type="number" placeholder="86/879395843" value="<?php echo"$telefone"; ?>" name="telefone" required>
    <input type="hidden" name="id" value="<?php echo"$myid"; ?>">
<br>
    <button type="submit" class="w3-btn w3-red">Atualizar</button>
<br><br>
<?php
  
?>
   

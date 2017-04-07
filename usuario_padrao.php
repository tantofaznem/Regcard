<?php
session_start();
$current = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<title>MOVITEL | Registro de Cartão SIM</title>
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
<h2>Registro de Cartão SIM</h2>
<form action="adicionarsim.php" method="POST" enctype="multipart/form-data" name="addroom">
 <label><b>Primeiro nome</b></label>
    <input type="text" placeholder="Primeiro nome" name="primeironome" required>

    <label><b>Nome do meio</b></label>
    <input type="text" placeholder="Nome do meio" name="nomedomeio" required>

    <label><b>Último nome</b></label>
    <input type="text" placeholder="Último nome" name="ultimonome" required>

    <label><b>Gênero</b></label>
    <select name="genero" required><option>Masculino</option><option>Feminino</option></select>

    <label><b>Endereço</b></label>
    <input type="text" placeholder="Endereço" name="endereco" required>

<label><b>Aniversário</b></label>
<input type="text" id="datepicker" name="aniversario" placeholder="11/03/2016" required>

    <label><b>Número de telefone</b></label>
    <input type="number" placeholder="86/879395843" name="telefone" required>


    <label><b>Imagem</b></label>
   <input type="file" name="fotografia" required>
<br>
    <button type="submit" class="w3-btn w3-red">Registrar</button>
<br><br>
<?php
  
?>
   

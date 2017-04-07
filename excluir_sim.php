<?php
include 'conf_bd.php';
$id = $_GET['id'];

$sql = "SELECT * FROM registro WHERE registroid ='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $perfil = $row['fotografia'];
       
if (!unlink($perfil))
  {
  echo ("Erro excluindo $file");
  }
else
  {
  echo ("$file excluido");
  }

    }
} else {
    echo "Sem resultados";
}

$sql = "DELETE FROM registro WHERE registroid ='$id'";

if ($conn->query($sql) === TRUE) {
 header("location:explorar.php");
} else {
    echo "Erro excluindo dado: " . $conn->error;
}

$conn->close();

?>

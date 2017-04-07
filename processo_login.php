<?php
// IMPLEMENTEM PARA A SEGURANCA DE LOGIN "Para que antes de se efectuar o login o usuario tem que ser enviado para esta esta page para verificar usuario, senha e cargo 'vulgo ROLE' e automaticamente sera redirecionado para a pagina Padrao ou Admin".


include_once 'conf_bd.php';
include_once 'funcoes.php';
 
session_start(); // Comecar seccao de PHP segura
 
if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $senha = $_POST['p']; // Password.
 
    if (login($email, $senha, $mysqli) == true) {
        // Login com sucesso 
        header('Location: ../pagina_protegida.php');
    } else {
        // Falha de autenticacao 
        header('Location: ../index.php?erro=1');
    }
} else {
    // A variavel para nao enviar para esta pagina. 
    echo 'Pedido invalido';
}

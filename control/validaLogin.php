<?php
//Inicia sessão
session_start();

//Valida que, se o usuário não estiver logado, sempre irá redirecionar para a tela de login
if (!isset($_SESSION['usuario_logado'])) {
    header("Location: ../view/login.php");
    exit();
}
?>
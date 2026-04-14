<?php
//Inicia a sessão
session_start();

//Destrói todas as variáveis
session_unset();

//Destrói a sessão
session_destroy();

//Redireciona para login
header("Location: ../view/login.php");
exit();
?>
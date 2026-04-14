<?php

//Realiza conexão com o Banco de Dados
$conn = new mysqli("db", "u3_user", "admin", "U3");

//Se caso der erro, mostra em tela
if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}

?>
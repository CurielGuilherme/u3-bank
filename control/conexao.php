<?php

// XAMPP (acesso de qualquer máquina - se o seu root tiver senha, substituir o "" com a senha)
$conn = new mysqli("localhost", "root", "", "U3");

//$conn = new mysqli("localhost", "user", "password", "U3"); > para máquinas que tenham criado usr e passwd para acessar a Base

// Docker (usar se necessário)
// $conn = new mysqli("db", "u3_user", "***", "U3"); > minha máquina

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}

?>
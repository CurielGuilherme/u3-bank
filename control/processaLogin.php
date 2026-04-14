<?php
//Inicia a sessão
session_start();
//Requer conexão
require "conexao.php";

//Coleta o que o usuário irá digitar
$login = $_POST['login'];
$senha = $_POST['senha'];

//Busca os dados na Base de Dados
$sql = "SELECT * FROM usuario WHERE EMAIL = '$login'";
$result = $conn->query($sql);

//Se o resultado for maior que zero, então o usuário existe
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    //Realiza validação da senha
    if (password_verify($senha, $user['SENHA'])) {
        $_SESSION['usuario_logado'] = $user['NOME'];
        header("Location: ../index.php");
        exit();
    } else {
        //Se a senha digitada estiver incorreta, ao invés de retornar um echo padrão
        //Retorna um popup que redireciona para login
        echo "
        <script>
            alert('Senha incorreta!');
            window.location.href = '../view/login.php';
        </script>
        ";
    }
} else {
    //Se o usuário não existir, ao invés de retornar um echo padrão
    //Retorna um popup que redireciona para login
    echo "
    <script>
        alert('Usuário não encontrado!');
        window.location.href = '../view/login.php';
    </script>
    ";
}
?>
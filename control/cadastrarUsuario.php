<?php
//Chama conexao.php para conectar ao Banco de Dados
require "conexao.php";
//Chama model para trabalhar com orientação a objetos
require "../model/usuario.php";

//Declaração de variáveis para realização do INSERT
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$data = $_POST['data_nascimento'];
$senhaDigitada = $_POST['senha'];

//Instancia novo usuário
$usuario = new Usuario($nome, $cpf, $email, $senhaDigitada);

//Coleta as informações do usuário e passa para a classe
$nome = $usuario->getNome();
$cpf = $usuario->getCpf();
$email = $usuario->getEmail();
$senha = password_hash($usuario->getSenha(), PASSWORD_DEFAULT);

//Realiza o método SQL de inserção de dados
$sql = "INSERT INTO usuario (CPF, RG, EMAIL, DATA_NASCIMENTO, SENHA, NOME)
        VALUES ('$cpf', '$rg', '$email', '$data', '$senha', '$nome')";

//Se tudo der certo, redireciona para uma página simples indicando sucesso para não fazer um echo padrão e o usuário ter de voltar ao login por conta própria
//Senão retorna um erro
if ($conn->query($sql)) {
    header("Location: ../view/sucesso.php");
    exit();
} else {
    echo "Erro: " . $conn->error;
}
?>
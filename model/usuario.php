<?php
//Cria classe usuário
class Usuario {

    //Variáveis
    private $nome;
    private $cpf;
    private $email;
    private $senha;

    //Construtor do objeto
    public function __construct($nome, $cpf, $email, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }

    //GETTERS

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    //SETTERS
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    // MÉTODOS (lógica básica)

    public function validarLogin($email, $senha) {
        if ($this->login === $email && $this->senha === $senha) {
            return true;
        }
        return false;
    }
}

?>
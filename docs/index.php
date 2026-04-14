<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header("Location: ../view/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <title>U3 Bank | Documentação</title>
    <link rel='icon' type='image/x-icon' href='../assets/favicon.png' />
    <link href='../css/styles.css' rel='stylesheet' />
</head>

<body>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container px-5'>
            <a class='navbar-brand' href='../index.php'>U3 BANK</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                data-bs-target='#navbarSupportedContent'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav ms-auto mb-2 mb-lg-0'>
                    <li class='nav-item'><a class='nav-link' href='../index.php'>Home</a></li>
                    <!--Docs (ativo)-->
                    <li class='nav-item'><a class='nav-link active' href='#'>Docs</a></li>
                    <li class='nav-item'><a class='nav-link' href='../index.php#servicos'>Serviços</a></li>
                    <!-- Usuário logado -->
                    <li class='nav-item'><a class='nav-link' href='#!'><?php echo $_SESSION['usuario_logado']; ?></a>
                    <li class='nav-item'><a class='nav-link' href='control/logout.php'>Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Conteúdo-->
    <div class='container px-4 px-lg-5 my-5'>

        <h1 class='mb-4'>📚 Documentação do Sistema U3 Bank</h1>
        <div class='list-group'>
            <a href='regras.php' class='list-group-item list-group-item-action'>
                📌 Regras de Negócio
            </a>
            <a href='classes.php' class='list-group-item list-group-item-action'>
                🧱 Classes do Sistema
            </a>
            <a href='tabelas.php' class='list-group-item list-group-item-action'>
                🗄️ Estrutura do Banco de Dados
            </a>
            <a href='equipe.php' class='list-group-item list-group-item-action'>
                👥 Equipe de Desenvolvimento
            </a>
        </div>
    </div>

    <!--Footer-->
    <footer class='py-5 bg-dark'>
        <div class='container px-4 px-lg-5'>
            <p class='m-0 text-center text-white'>Copyright &copy; U3 2026</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>
<?php
//Chama arquivo PHP que valida o login
session_start();
//Se o usuário não estiver logado, vai mandar direto para a página de login
if (!isset($_SESSION['usuario_logado'])) {
    header("Location: view/login.php");
    exit();
}
?>
<!--Utilizamos criação de template por meio do Boostrap, biblioteca de templates e fomos alterando conforme nossas necessidades-->
<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <meta name='description' content='home U3' />
    <meta name='author' content='Guilherme Curiel' />
    <title>U3 Bank | seu banco seu universo</title>
    <!--Ícone do navegador-->
    <link rel='icon' type='image/x-icon' href='assets/favicon.png' />
    <!--Importa temas do CSS (incluindo o Bootstrap framework de template)-->
    <link href='css/styles.css' rel='stylesheet' />
</head>

<body>
    <!--Navegação responsiva-->
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container px-5'>
            <a class='navbar-brand' href='#!'>U3 BANK</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false'
                aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav ms-auto mb-2 mb-lg-0'>
                    <li class='nav-item'><a class='nav-link active' aria-current='page' href='#!'>Home</a></li>
                    <li class='nav-item'><a class='nav-link' href='docs/index.php'>Docs</a></li>
                    <li class='nav-item'><a class='nav-link' href='#!'>Serviços</a></li>
                    <li class='nav-item'><a class='nav-link' href='#!'><?php echo $_SESSION['usuario_logado']; ?></a>
                    </li>
                    <li class='nav-item'><a class='nav-link' href='control/logout.php'>Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Conteúdo da página-->
    <div class='container px-4 px-lg-5'>
        <!--Linha do header-->
        <div class='row gx-4 gx-lg-5 align-items-center my-5'>
            <div class='col-lg-7'><img class='img-fluid rounded mb-4 mb-lg-0' src='assets/bank.jpeg' alt='...' /></div>
            <div class='col-lg-5'>
                <h1 class='font-weight-light'>Seu banco... seu universo</h1>
                <p>Se quer atendimento de qualidade, venha para o U3, onde o atendimento ao cliente é levado a sério.
                    Desfrute de benefícios exclusivos que só nós podemos fornecer: juros baixos que cabem no seu bolso.
                    Abra uma conta e desfrute da funcionalidade Pix.</p>
                <a class='btn btn-primary' href='#!'>Conheça nossos serviços</a>
            </div>
        </div>
        <!--Cartões-->
        <div class='row gx-4 gx-lg-5'>
            <div class='col-md-4 mb-5'>
                <div class='card h-100'>
                    <div class='card-body'>
                        <h2 class='card-title'>Crie uma conta</h2>
                        <p class='card-text'>Ao criar uma conta no U3, você desfruta de benefícios exclusivos, como
                            baixa taxa de juros, concorrência de prêmios, centralização de seus pagamentos e serviço
                            Pix.</p>
                    </div>
                    <div class='card-footer'><a class='btn btn-primary btn-sm' href='#!'>Saiba mais</a></div>
                </div>
            </div>
            <div class='col-md-4 mb-5'>
                <div class='card h-100'>
                    <div class='card-body'>
                        <h2 class='card-title'>Pix</h2>
                        <p class='card-text'>O serviço de Pagamento Instantâneo criado pelo Banco Central do Brasil é um
                            serviço pioneiro no ecossistema financeiro mundial. Com o Pix você pode fazer pagamentos
                            quando e onde quiser de forma Instantânea, comprou algo em uma loja e não levou a carteira?
                            Pix. Precisa pagar uma conta? Pix. Crie uma chave e desfrute dessa ferramenta inovadora!</p>
                    </div>
                    <div class='card-footer'><a class='btn btn-primary btn-sm' href='#!'>Saiba mais</a></div>
                </div>
            </div>
            <div class='col-md-4 mb-5'>
                <div class='card h-100'>
                    <div class='card-body'>
                        <h2 class='card-title'>Conheça a equipe e o banco</h2>
                        <p class='card-text'>Conheça o time responsável pelo banco e como ele está sendo desenvolvido.
                        </p>
                    </div>
                    <div class='card-footer'><a class='btn btn-primary btn-sm' href='docs/equipe.php'>Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class='py-5 bg-dark'>
        <div class='container px-4 px-lg-5'>
            <p class='m-0 text-center text-white'>Copyright &copy; U3 2026</p>
        </div>
    </footer>
    <!--Chamando o JS do Bootstrap-->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>
<!--Feito com utilização de templates do Bootstrap alterando para nossas necessidades-->
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!--Chamando CSS-->
    <link rel='stylesheet' href='../css/login.css'>
    <!--Chamando Javascript-->
    <script src='../js/login.js'></script>
    <!--Ícone do navegador-->
    <link rel='icon' type='image/x-icon' href='../assets/favicon.png' />
    <title>U3 | Login</title>
</head>
<body>
      <div class='container'>
        <!--Título e serviços-->
        <div class='box-1'>
            <div class='content-holder'>
                <h2>U3 Bank</h2>
                
                <button class='button-1' onclick='signup()'>Cadastrar</button>
                <button class='button-2' onclick='login()'>Login</button>
            </div>
        </div>

        
        <!--Container de login-->
        <div class='box-2'>
            <div class='login-form-container'>
                <h1>Formulário de login</h1>
                <form action='../control/processaLogin.php' method='POST'>
                    <input type='text' placeholder='E-mail' class='input-field' name='login'>
                    <br><br>
                    <input type='password' placeholder='Senha' class='input-field' name='senha'>
                    <br><br>
                    <button class='login-button' type='submit'>Login</button>
                </form>
            </div>


    <!--Container de cadastrado-->
                <div class='signup-form-container'>
                    <h1>Formulário de cadastro</h1>
                    <form action='../control/cadastrarUsuario.php' method='POST'>
                        <input type='text' placeholder='Nome completo' class='input-field' name='nome'>
                        <br><br>
                        <input type='email' placeholder='Email' class='input-field' name='email'>
                        <br><br>
                        <input type='text' placeholder='CPF' class='input-field' name='cpf'>
                        <br><br>
                        <input type='text' placeholder='RG' class='input-field' name='rg'>
                        <br><br>
                        <input type='date' placeholder='Data de nascimento' class='input-field' name='data_nascimento'>
                        <br><br>
                        <input type='password' placeholder='Senha' class='input-field' name='senha'>
                        <br><br>
                        <button class='signup-button' type='submit'>Cadastrar</button>
                    </form>
                </div>
        </div>
      </div>
</body>
</html>
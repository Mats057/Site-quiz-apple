<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <title>Login</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="js/dark.js" defer></script>
</head>

<body>
    <header>
        <div id="options">
            <a href="index.php" class="title2">
                <h7 class="title2">Sobre a Apple
            </a></h7>
            <a class="space">|</a>
            <a href="formp.php" class="title2">
                <h7 class="title2">Teste Apple
            </a></h7>
            <a class="space">|</a>
            <h7 id="title">Logar</h7>
            <a class="space">|</a>
            <a href="php/cadastrar.php" class="title2">
                <h7 class="title2">Cadastrar
            </a></h7>
        </div>
    </header>
    <main class="container">
        <div class="form-signin">
            <h1 id="cad">Formulário de login</h1>
            <form action="php/valida.php" method="post">
                <fieldset>
                    <p><label for="usuario" style="margin-top: 20px; color: #ffffff;">Usuário:</label></p>
                    <input type="text" name="usuario" placeholder="Digite o seu usuario" size="30">
                    <label for="senha" style="margin-top: 20px; color: #ffffff;">Senha:</label>
                    <p>
                        <input type="password" name="senha" placeholder="Digite a sua senha" size="30">
                        <input type="submit" id="btnConfirm" name="acessar" value="Acessar">
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo '<div class="erro-msg" style="
					color: red;
					background-color: yellow;
					border-radius: 5px;
					font-weight: bold;
					padding: 10px;
					border: 1px solid red;
					font-size: 16px;
					text-align: center;">' . $_SESSION['msg'] . '</div>';
                            unset($_SESSION['msg']);
                        }
                        ?>
                    <h4 class="row text-center" style="margin-top: 20px; color: #ffffff;">Ainda não possui uma conta?
                    </h4>
                    <a href="php/cadastrar.php" id="criar-conta" class="text-center">Clique aqui e crie uma grátis</a>
                </fieldset>
            </form>
        </div>
    </main>
</body>

</html>
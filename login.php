<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <title>Login</title>
</head>

<body>
    <header>
        <div id="options">
            <a href="index.html" class="title2">
                <h7 class="title2">Sobre a Apple
            </a></h7>
            <a class="space">|</a>
            <a href="formp.php" class="title2">
                <h7 class="title2">Teste Apple
            </a></h7>
            <a class="space">|</a>
            <h1 id="title">Logar</h1>
            <a class="space">|</a>
            <a href="php/cadastrar.php" class="title2">
                <h7 class="title2">Cadastrar-se
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
                    <label for="senha" style="margin-top: 20px; color: #ffffff;">Senha:</label><p>
                    <input type="password" name="senha" placeholder="Digite a sua senha" size="30">
                    <input type="submit" class="btnConfirm" name="acessar" value="Acessar">
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
                    <a href="php/cadastrar.php" class="text-center">Clique aqui e crie uma grátis</a>
                </fieldset>
            </form>
        </div>
    </main>
</body>

</html>

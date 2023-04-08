<?php

session_start();
if (!empty($_SESSION['id'])) {
} else {
    echo '<h2 class="text-center" id="restrita">Faça login antes de tentar entrar!</h2>';
    header("Location: ../login.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/hover.css" type="text/css">
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
    <title>Meu Perfil</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="../js/dark.js" defer></script>
</head>

<body>
    <header>
        <div id="options">
            <a href="../index.php" class="title2">
                <h7 class="title2">Sobre a Apple
            </a></h7>
            <a class="space">|</a>
            <a href="../formp.php" class="title2">
                <h7 class="title2">Teste Apple
            </a></h7>
            <a class="space">|</a>
            <div class="dropdown">
                <a class="title2">
                    <h7 class="title2">Dados

                </a></h7>
                <div class="dropdown-child">
                    <a href="notas.php">Notas</a>
                    <a href="users.php">Usuários</a>

                </div>
            </div>
            <a class="space">|</a>
            <h7 id="title">Meu Perfil</h7>
        </div>
    </header>
    <main>
        <div id="perfil">
            <h1>Configurações da conta</h1>
            <div id="theme">
                <h2>Tema:</h2>
                <div class="wrapper">
                    <input type="checkbox" name="checkbox" class="switch" id="change-theme" checked>
                </div>
            </div>
            <div class="ações">
                <h2>Editar conta:</h2>
                <?php
                echo '<a href="editUsers.php?usuario=' . $_SESSION['usuario'] . '" id="btnEdit">Editar</a>';
                ?>
            </div>
            <div class="ações">
                <h2>Apagar conta:</h2>
                <?php
                echo '<a href="apagarUsers.php?usuario=' . $_SESSION['usuario'] . '" id="btnApagar">Apagar</a>';
                ?>
            </div>
    </main>
</body>

</html>
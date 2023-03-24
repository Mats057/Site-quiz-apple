<?php
session_start();
if (!empty($_SESSION['id'])) {
} else {
    echo '<h2 class="text-center" id="restrita">Faça login antes de tentar entrar!</h2>';
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de notas</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
</head>

<body>

    <body>
        <header>
            <a href="../index.php" class="title2">
                <h7 class="title2">Sobre a Apple
            </a></h7>
            <a class="space">|</a>
            <a href="../formp.php" class="title2">
                <h7 class="title2">Teste Apple
            </a></h7>
            <a class="space">|</a>
            <h1 id="title">Resultados</h1>
            <a class="space">|</a>
            <a href="logout.php" class="title2">
                <h7 class="title2">Sair
            </a></h7>
        </header>

    </body>

</html>
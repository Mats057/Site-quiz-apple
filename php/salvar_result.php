<?php
filter_input(INPUT_POST, 'btnTerminar', FILTER_DEFAULT);

session_start();
if (!empty($_SESSION['id'])) {
} else {
    echo '<h2 class="text-center" id="restrita">Faça login antes de tentar entrar!</h2>';
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
</head>

<body>
    <header>
        <a href="../index.html" class="title2">
            <h7 class="title2">Início
        </a></h7>
        <a class="space">|</a>
        <h1 id="title">Seu resultado</h1>
        <a class="space">|</a>
        <a href="consultar.php" class="title2">
            <h7 class="title2">Todos resultados
        </a></h7>
    </header>
    <main> <?php
            echo '<h2 class="text-center" id="restrita">Olá ' . $_SESSION['nome'] . ', seus resultados estão logo abaixo!</h2>';
            ?>
        <h2 class="text-center"><a class="btnSair" href="php/logout.php">Sair</a></h2>


</body>

</html>
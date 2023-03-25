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
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
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
            <div class="dropdown">
                <h7 id="title">Dados</h7>
                <div class="dropdown-child">
                    <a style="color: var(--cor-letra); transition:0; opacity:1;">Notas</a>
                    <a href="php/users.php">Usuários</a>

                </div>
            </div>
            <a class="space">|</a>
            <a href="logout.php" class="title2">
                <h7 class="title2">Sair
            </a></h7>
        </header>
        <main>
            <?php
            include_once("conexao.php");
            $result_usuario = "SELECT * FROM resultados";
            $resultado_usuario = mysqli_query($sql, $result_usuario);
            while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
                echo '<div id="respostas">';
                echo '<h2 class="text-center">Usuário: ' . $row_usuario['usuario'] . '</h2>';
                echo '<h2 class="text-center">Nota: ' . $row_usuario['nota'] . '</h2>';
                echo '<h2 class="text-center">Data: ' . $row_usuario['data'] . '</h2>';
                echo '</div>';
            }
            ?>
    </body>

</html>
<?php
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
    <title>Consulta de notas</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="../js/dark.js" defer></script>
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
                    <a href="notas.php">Notas</a>
                    <a style="color: var(--cor-letra); transition:0; opacity:1;">Usuários</a>

                </div>
            </div>
            <a class="space">|</a>
            <a href="conta.php" class="title2">
                <h7 class="title2">Meu Perfil
            </a></h7>
        </header>
        <main>
            <?php
            include_once("conexao.php");
            $result_usuario = "SELECT * FROM usuarios";
            $resultado_usuario = mysqli_query($sql, $result_usuario);
            while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
                echo '<div id="respostas">';
                echo '<h2 class="text-center">Nome: ' . $row_usuario['nome'] . '</h2>';
                echo '<h2 class="text-center">Usuário: ' . $row_usuario['usuario'] . '</h2>';
                echo '<h2 class="text-center">Email: ' . $row_usuario['email'] . '</h2>';
                echo '<a id="btnEdit" href="editUsers.php?usuario=' . $row_usuario['usuario'] . '">Editar</a>';
                echo '<a id="btnApagar" href="apagarUsers.php?usuario=' . $row_usuario['usuario'] . '">Apagar</a>';
                echo '</div>';
            }
            ?>
    </body>

</html>
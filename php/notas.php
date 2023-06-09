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
            <img id="logo" src="../img/logo.png" alt="Logo da Apple">
            <div id="options">
                <a href="../index.php" class="title2">
                    Sobre a Apple
                </a>
                <a href="../formp.php" class="title2">
                    Teste Apple
                </a>
                <div class="dropdown">
                    <h7 id="title">Dados</h7>
                    <div class="dropdown-child">
                        <a style="color: var(--cor-letra); transition:0; opacity:1;">Notas</a>
                        <a href="users.php">Usuários</a>

                    </div>
                </div>
                <a href="conta.php" class="title2">
                    Meu Perfil
                </a>
                <a href="logout.php" class="title2" id="sair">
                    Sair
                </a>
            </div>
        </header>
        <main>
            <?php
            include_once("conexao.php");
            $result_usuario = "SELECT * FROM resultados";
            $resultado_usuario = mysqli_query($sql, $result_usuario);
            while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
                $local_foto = "SELECT foto FROM usuarios WHERE usuario = '{$row_usuario['usuario']}'";
                $resultado_foto = mysqli_query($sql, $local_foto);
                $resultado_foto = mysqli_fetch_assoc($resultado_foto);
                echo '<div id="respostas">';
                echo '<img src="../img/' . $resultado_foto['foto'] . '" alt="Foto de perfil" id="foto">';
                echo '<h2 class="text-center">Usuário: ' . $row_usuario['usuario'] . '</h2>';
                echo '<h2 class="text-center">Nota: ' . $row_usuario['nota'] . '</h2>';
                echo '<h2 class="text-center">Data: ' . $row_usuario['data'] . '</h2>';
                echo '<a id="btnEdit" href="editNota.php?usuario=' . $row_usuario['usuario'] . '">Editar</a>';
                echo '<a id="btnApagar" href="apagarNota.php?usuario=' . $row_usuario['usuario'] . '">Apagar</a>';
                echo '</div>';
            }
            ?>
    </body>

</html>
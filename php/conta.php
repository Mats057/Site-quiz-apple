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
            <a href="../index.php" class="title2">Sobre a Apple</a>
            <a href="../formp.php" class="title2">Teste Apple</a>
            <div class="dropdown">
                <a class="title2">Dados</a>
                <div class="dropdown-child">
                    <a href="notas.php">Notas</a>
                    <a href="users.php">Usuários</a>
                </div>
            </div>
            <h7 id="title">Meu Perfil</h7>
            <a href="logout.php" class="title2" id="sair">
                Sair
            </a>
        </div>
    </header>
    <main>
        <div id="perfil">
            <h1>Configurações da conta</h1>
            <div id="dados">
                <div>
                    <h2>Foto:</h2>
                    <?php
                    echo '<img src="../img/' . $_SESSION['foto'] . '" alt="Foto de perfil" id="foto">';
                    ?><br>
                    <div class="upload">
                        <label class="custom-file-upload" for="nova_imagem">Selecionar arquivo</label>
                        <input type="file" name="nova_imagem" id="nova_imagem" accept="image/*" onchange="enviarNovaImagem()">
                    </div>
                    <script>
                        function enviarNovaImagem() {
                            var formData = new FormData();
                            var novaImagem = document.getElementById("nova_imagem").files[0];
                            formData.append("nova_imagem", novaImagem);

                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "atualizar_imagem.php", true);
                            xhr.onload = function() {
                                if (this.status == 200) {
                                    console.log("Imagem atualizada com sucesso");
                                }
                            };
                            xhr.send(formData);
                        }
                    </script>
                </div>
                <div id="nome">
                    <h2>Nome:</h2>
                    <?php
                    echo '<h3>' . $_SESSION['nome'] . '</h3>';
                    ?>
                </div>
                <div id="user">
                    <h2>Usuário:</h2>
                    <?php
                    echo '<h3>' . $_SESSION['usuario'] . '</h3>';
                    ?>
                </div>
                <div id="email">
                    <h2>Email:</h2>
                    <?php
                    echo '<h3>' . $_SESSION['email'] . '</h3>';
                    ?>
                </div>

            </div>
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
                <h2>Excluir conta:</h2>
                <?php
                echo '<a href="apagarUsers.php?usuario=' . $_SESSION['usuario'] . '" id="btnApagar" onclick="return confirm(\'Tem certeza que deseja excluir? Essa ação é irreversível\')">Excluir</a>';
                ?>
            </div>
    </main>
</body>

</html>
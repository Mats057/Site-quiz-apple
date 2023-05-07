<?php

session_start();
if (!empty($_SESSION['id'])) {
    if (!empty($_GET['usuario'])) {
        $usuario = $_GET['usuario'];
    } else {
        header("Location: users.php");
    }
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
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
    <title>Login</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="../js/dark.js" defer></script>
</head>

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
                    <a href="notas.php">Notas</a>
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
        $sql_select = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $result_usuario = mysqli_query($sql, $sql_select);
        if ($result_usuario->num_rows > 0) {
            while ($row_notas = mysqli_fetch_assoc($result_usuario)) {
                $id = $row_notas['id'];
                $usuario = $row_notas['usuario'];
                $nome = $row_notas['nome'];
                $email = $row_notas['email'];
            };
        } else {
            header("Location: notas.php");
        }

        ?>
        <div class="container">
            <div class="form-signin">
                <h2 id="cad">Editar dados de <?php echo $usuario ?></h2>
                <form method="POST" action="saveUsersEdit.php">
                    <fieldset>
                        </p><label style="margin-top: 20px; color: #ffffff;">ID (Impossível alterar):</label></p>
                        <input type="text" name="id" value="<?php echo $id ?>" class="form-control" readonly><br>

                        <label style="margin-top: 20px; color: #ffffff;">Usuário:</label>
                        <p>
                            <input type="text" name="usuario" class="form-control" value="<?php echo $usuario ?>" class="form-control"><br>

                            <label style="margin-top: 20px; color: #ffffff;">Nome:</label>
                        <p>
                            <input type="text" name="nome" value="<?php echo $nome ?>" placeholder="Digite o nome do usuário" class="form-control"><br>

                            <label style="margin-top: 20px; color: #ffffff;">Email:</label>
                        <p>
                            <input type="email" name="email" value="<?php echo $email ?>" placeholder="Digite o email do usuário" class="form-control"><br>
                            <label style="margin-top: 20px; color: #ffffff;">Senha(deixe vazio para não alterar):</label>
                        <p>
                            <input type="password" name="senha" placeholder="Digite a nova senha" class="form-control"><br>

                            <input type="submit" name="btnEditUsuario" value="Editar" id="btnEdit" /><br><br>
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
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
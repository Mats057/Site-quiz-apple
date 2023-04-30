<?php
session_start();
if (!empty($_SESSION['id'])) {
    include_once("conexao.php");
} else {
    echo '<h2 class="text-center" id="restrita">Faça login antes de tentar entrar!</h2>';
    header("Location: ../login.php");
}

if (isset($_FILES['nova_imagem'])) {
    $extensao = strtolower(substr($_FILES['nova_imagem']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "../img/";
    move_uploaded_file($_FILES['nova_imagem']['tmp_name'], $diretorio . $novo_nome);
    $update = "UPDATE usuarios SET foto = '$novo_nome' WHERE usuario = '" . $_SESSION['usuario'] . "'";
    mysqli_query($sql, $update);
    if ($_SESSION['foto'] != "default.png") {
        unlink($diretorio . $_SESSION['foto']);
    }
    $_SESSION['foto'] = $novo_nome;
    header('Location: conta.php');
} else
    return false;

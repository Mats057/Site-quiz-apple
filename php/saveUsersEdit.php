<?php
include_once("conexao.php");
if (isset($_POST['btnEditUsuario'])) {
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    if (!empty($_POST['senha'])) {
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $sqledit = "UPDATE usuarios SET usuario = '$usuario', nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'";
        if (mysqli_query($sql, $sqledit)) {
            $_SESSION['msg'] = "Usuário editado com sucesso";
            header("Location: users.php");
        } else {
            $erro = true;
            $_SESSION['msg'] = "Usuário não foi editado com sucesso";
            header("Location: editUsers.php");
        }
    } else {
        $sqledit = "UPDATE usuarios SET usuario = '$usuario', nome = '$nome', email = '$email' WHERE id = '$id'";
        if (mysqli_query($sql, $sqledit)) {
            $_SESSION['msg'] = "Usuário editado com sucesso";
            header("Location: users.php");
        } else {
            $erro = true;
            $_SESSION['msg'] = "Usuário não foi editado com sucesso";
            header("Location: editUsers.php");
        }

    }
    

}

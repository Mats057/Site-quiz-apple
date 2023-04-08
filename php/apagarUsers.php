<?php
session_start();
if (!empty($_SESSION['id'])) {
    include_once("conexao.php");
    $usuario = $_GET['usuario'];
    $sql_select = "DELETE FROM usuarios WHERE usuario = '$usuario'";
    $result_delete = mysqli_query($sql, $sql_select);
    if($usuario == $_SESSION['usuario']){
        session_destroy();
        header("Location: ../index.php");
    }else{
    header("Location: users.php");
}
} else {
    echo '<h2 class="text-center" id="restrita">Faça login antes de tentar entrar!</h2>';
    header("Location: ../login.php");
}

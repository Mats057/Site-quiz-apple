<?php
include_once("conexao.php");
if(isset($_POST['btnEditUsuario'])){
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $nota = $_POST['nota'];
    $data = $_POST['data'];
    $sqledit = "UPDATE resultados SET nota = '$nota', data = '$data' WHERE id = '$id'";
    if(mysqli_query($sql, $sqledit)){
        $_SESSION['msg'] = "Usuário editado com sucesso";
        header("Location: notas.php");
    }else{
        $erro =true;
        $_SESSION['msg'] = "Usuário não foi editado com sucesso";
        header("Location: editNota.php");
    }
}

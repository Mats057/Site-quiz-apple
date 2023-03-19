<?php

    session_start();
    include_once("conexao.php");
    $acessar = filter_input(INPUT_POST, 'acessar', FILTER_DEFAULT);
    if($acessar){
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_DEFAULT);
        $senha= filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
        
        if((!empty($usuario)) and (!empty($senha))){

            $result_usuario = "select id, nome, email, senha from usuarios where usuario='$usuario' LIMIT 1";
            $resultado_usuario = mysqli_query($sql, $result_usuario);
            if($result_usuario){ 
                $row_usuario = mysqli_fetch_assoc($resultado_usuario);
                if(password_verify($senha, $row_usuario['senha'])){
                    $_SESSION['id'] = $row_usuario['id'];
                    $_SESSION['nome'] = $row_usuario['nome'];
                    $_SESSION['email'] = $row_usuario['email'];
                    header("Location: ../formp.php");

                }else{
                    $_SESSION['msg'] = "Usuário ou senha incorreta";
                    header("Location:../login.php");
                }

            }else
            {
                $_SESSION['msg'] = "Usuário não encontrado";
                header("Location:../login.php");
            }
        }else{
            $_SESSION['msg'] = "Digite o usuário e a senha";
            header("Location:../login.php");
        }
    }else{
        $_SESSION['msg'] = "Página não encontrada";
        header("Location:../login.php");
    }
?>
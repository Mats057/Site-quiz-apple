<?php
include('conexao.php');
filter_input(INPUT_POST, 'btnTerminar', FILTER_DEFAULT);

session_start();
if (!empty($_SESSION['id']) && !empty($_POST)) {
} else {
    echo '<h2 class="text-center" id="restrita">Faça login antes de tentar entrar!</h2>';
    header("Location: ../login.php");
}
date_default_timezone_set("America/Sao_Paulo");
$data = date('d/m/Y H:i:s');
$pontos = 0;
if ($_POST['perg1'] == '1c') {
    $pontos++;
}
if ($_POST['perg2'] == '2b') {
    $pontos++;
}
if ($_POST['perg3'] == '3a') {
    $pontos++;
}
if ($_POST['perg4'] == '4c') {
    $pontos++;
}
if ($_POST['perg5'] == '5c') {
    $pontos++;
}
if ($_POST['perg6'] == '6c') {
    $pontos++;
}
if ($_POST['perg7'] == '7b') {
    $pontos++;
}
if ($_POST['perg8'] == '8c') {
    $pontos++;
}
if ($_POST['perg9'] == '9a') {
    $pontos++;
}
if ($_POST['perg10'] == '10c') {
    $pontos++;
}

$teste_usuario = "SELECT usuario FROM resultados WHERE usuario='" . $_SESSION['usuario'] . "'";
$testando_usuario = mysqli_query($sql, $teste_usuario);
if (($testando_usuario) and ($testando_usuario->num_rows != 0)) {
    $_SESSION['msg'] = "Você já fez esse teste";
} else {
    $result_usuario = "INSERT INTO resultados (usuario, nota, data) VALUES (
        '" . $_SESSION['usuario'] . "',
        '" . $pontos . "',
        '" . $data . "'
        )";
    $resultado_usuario = mysqli_query($sql, $result_usuario);
    unset($_SESSION['msg']);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <a href="../index.php" class="title2">
            <h7 class="title2">Sobre a Apple
        </a></h7>
        <a class="space">|</a>
        <h7 id="title">Teste Apple</h7>
        <a class="space">|</a>
        <div class="dropdown">
            <a class="title2">
                <h7 class="title2">Dados

            </a></h7>
            <div class="dropdown-child">
                <a href="notas.php">Notas</a>
                <a href="users.php">Usuários</a>

            </div>
        </div>
        <a class="space">|</a>
        <a href="logout.php" class="title2">
            <h7 class="title2">Sair
        </a></h7>
    </header>
    <main> <?php
            if (isset($_SESSION['msg'])) {
                echo '<div id="restrita-rep"><h2 class="text-center">' . $_SESSION['nome'] . ' já fez o teste, exclua a nota antiga para refazer!</h2></div>';
                unset($_SESSION['msg']);
            } else {
                echo '<div id="respostas">';
                echo '<div id="restrita"><h7 class="text-center">Olá ' . $_SESSION['nome'] . ', seus resultados estão logo abaixo!</h7></div>';
                echo '<label class="resp" for="perg1">';
                if ($_POST['perg1'] == '1c') {
                    echo '1. Você escolheu a letra "c) Cupertino" e acertou';
                } else if ($_POST['perg1'] == '1b') {
                    echo '1. Você escolheu a letra "b) Los Angeles" e errou, a resposta correta é a letra "c) Cupertino"';
                } else {
                    echo '1. Você escolheu a letra "a) New York" e errou, a resposta correta é a letra "c) Cupertino"';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg2">';
                if ($_POST['perg2'] == '2b') {
                    echo '2. Você escolheu a letra "b) Steve Jobs, Steve Wozniak e Ronald
                Wayne" e acertou';
                } else if ($_POST['perg2'] == '2c') {
                    echo '2. Você escolheu a letra "c)  Mark Zuckerberg, Larry Page e Sergey Brin" e errou, a resposta correta é a letra "b) Steve Jobs, Steve Wozniak e Ronald Wayne"';
                } else {
                    echo '2. Você escolheu a letra "a) Steve Jobs, Bill Gates e Jeff
                Bezos" e errou, a resposta correta é a letra "b) Steve Jobs, Steve Wozniak e Ronald';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg3">';
                if ($_POST['perg3'] == '3a') {
                    echo '3. Você escolheu a letra "a) Apple II" e acertou';
                } else if ($_POST['perg3'] == '3b') {
                    echo '3. Você escolheu a letra "b) Macintosh" e errou, a resposta correta é a letra "a) Apple II"';
                } else {
                    echo '3. Você escolheu a letra "c) Lisa" e errou, a  resposta correta é a letra "a) Apple II"';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg4">';
                if ($_POST['perg4'] == '4c') {
                    echo '4. Você escolheu a letra "c) 2007" e acertou';
                } else if ($_POST['perg4'] == '4b') {
                    echo '4. Você escolheu a letra "b) 2006" e errou, a resposta correta é a letra "c)2007"';
                } else {
                    echo '4. Você escolheu a letra "a) 2005" e errou, a resposta correta é a letra "c) 2007"';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg5">';
                if ($_POST['perg5'] == '5c') {
                    echo '5. Você escolheu a letra "c) Apple Music" e acertou';
                } else if ($_POST['perg5'] == '5b') {
                    echo '5. Você escolheu a letra "b) Tidal" e errou, a resposta correta é a letra "c) Apple Music"';
                } else {
                    echo '5. Você escolheu a letra "a) Spotify" e errou, a resposta correta é a letra "c) Apple Music"';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg6">';
                if ($_POST['perg6'] == '6c') {
                    echo '6. Você escolheu a letra "c) iCloud" e acertou';
                } else if ($_POST['perg6'] == '6b') {
                    echo '6. Você escolheu a letra "b) OneDrive" e errou, a resposta correta é a letra "c) iCloud"';
                } else {
                    echo '6. Você escolheu a letra "a) Google Drive" e errou, a resposta correta é a letra "c) iCloud"';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg7">';
                if ($_POST['perg7'] == '7b') {
                    echo '7. Você escolheu a letra "b) Apple Watch" e acertou';
                } else if ($_POST['perg7'] == '7c') {
                    echo '7. Você escolheu a letra "c) Fitbit Versa" e errou, a resposta correta é a letra "b) Apple Watch""';
                } else {
                    echo '7. Você escolheu a letra "a) Samsung Galaxy Watch" e errou, a resposta correta é a letra "b) Apple Watch"';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg8">';
                if ($_POST['perg8'] == '8c') {
                    echo '8. Você escolheu a letra "c) Apple Pay" e acertou';
                } else if ($_POST['perg8'] == '8b') {
                    echo '8. Você escolheu a letra "b) Cash Pay" e errou, a resposta correta é a letra "c) Apple Pay"';
                } else {
                    echo '8. Você escolheu a letra "a) Venmo" e errou, a resposta correta é a letra "c) Apple Pay"';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg9">';
                if ($_POST['perg9'] == '9a') {
                    echo '9. Você escolheu a letra "a) Lista das empresas mais inovadoras" e acertou';
                } else if ($_POST['perg9'] == '9b') {
                    echo '9. Você escolheu a letra "b) Lista das empresas mais ricas" e errou, a resposta correta é a letra "a) Lista das empresas mais inovadoras"';
                } else {
                    echo '9. Você escolheu a letra "a) Lista das empresas mais polêmicas" e errou, a resposta correta é a letra "a) Lista das empresas mais inovadoras"';
                }
                echo '</label><br>';
                echo '<label class="resp" for="perg10">';
                if ($_POST['perg10'] == '10c') {
                    echo '10. Você escolheu a letra "c) A indústria de tecnologia" e acertou';
                } else if ($_POST['perg10'] == '10b') {
                    echo '10. Você escolheu a letra "b) A indústria de moda" e errou, uma vez que a Apple é uma empresa de tecnologia, como descrito na resposta c)';
                } else {
                    echo '10. Você escolheu a letra "a) A indústria automotiva" e errou, uma vez que a Apple é uma empresa de tecnologia, como descrito na resposta c)';
                }
                echo '</label><br>';
                echo '<label>';
                echo '<h3 class="text-center" id="pontos">Você acertou ' . $pontos . ' de 10 questões!</h3>';
                echo '</label><div>';
            }
            ?>
    </main>
</body>

</html>
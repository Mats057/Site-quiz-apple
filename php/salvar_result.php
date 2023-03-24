<?php
filter_input(INPUT_POST, 'btnTerminar', FILTER_DEFAULT);

session_start();
if (!empty($_SESSION['id']) && !empty($_POST)) {
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
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
</head>

<body>
    <header>
        <a href="../index.php" class="title2">
            <h7 class="title2">Sobre a Apple
        </a></h7>
        <a class="space">|</a>
        <h1 id="title">Seu resultado</h1>
        <a class="space">|</a>
        <a href="consultar.php" class="title2">
            <h7 class="title2">Todos resultados
        </a></h7>
        <a class="space">|</a>
        <a href="php/logout.php" class="title2">
            <h7 class="title2">Sair
        </a></h7>
    </header>
    <main> <?php
            echo '<h2 class="text-center" id="restrita">Olá ' . $_SESSION['nome'] . ', seus resultados estão logo abaixo!</h2>';
            ?>
        <div id="respostas">
            <label class="resp" for="perg1">
                <?php
                if ($_POST['perg1'] == '1c') {
                    echo '1. Você escolheu a letra "c) Cupertino" e acertou';
                } else if ($_POST['perg1'] == '1b') {
                    echo '1. Você escolheu a letra "b) Los Angeles" e errou';
                } else {
                    echo '1. Você escolheu a letra "a) New York" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg2">
                <?php
                if ($_POST['perg2'] == '2b') {
                    echo '2. Você escolheu a letra "b) Steve Jobs, Steve Wozniak e Ronald
                Wayne" e acertou';
                } else if ($_POST['perg2'] == '2c') {
                    echo '2. Você escolheu a letra "c)  Mark Zuckerberg, Larry Page e Sergey Brin" e errou';
                } else {
                    echo '2. Você escolheu a letra "a) Steve Jobs, Bill Gates e Jeff
                Bezos" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg3">
                <?php
                if ($_POST['perg3'] == '3a') {
                    echo '3. Você escolheu a letra "a) Apple II" e acertou';
                } else if ($_POST['perg3'] == '3b') {
                    echo '3. Você escolheu a letra "b) Macintosh" e errou';
                } else {
                    echo '3. Você escolheu a letra "c) Lisa" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg4">
                <?php
                if ($_POST['perg4'] == '4c') {
                    echo '4. Você escolheu a letra "c) 2007" e acertou';
                } else if ($_POST['perg4'] == '4b') {
                    echo '4. Você escolheu a letra "b) 2006" e errou';
                } else {
                    echo '4. Você escolheu a letra "a) 2005" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg5">
                <?php
                if ($_POST['perg5'] == '5c') {
                    echo '5. Você escolheu a letra "c) Apple Music" e acertou';
                } else if ($_POST['perg5'] == '5b') {
                    echo '5. Você escolheu a letra "b) Tidal" e errou';
                } else {
                    echo '5. Você escolheu a letra "a) Spotify" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg6">
                <?php
                if ($_POST['perg6'] == '6c') {
                    echo '6. Você escolheu a letra "c) Apple Music" e acertou';
                } else if ($_POST['perg6'] == '6b') {
                    echo '6. Você escolheu a letra "b) Google Drive" e errou';
                } else {
                    echo '6. Você escolheu a letra "a) OneDrive" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg7">
                <?php
                if ($_POST['perg7'] == '7b') {
                    echo '7. Você escolheu a letra "b) Apple Watch" e acertou';
                } else if ($_POST['perg7'] == '7a') {
                    echo '7. Você escolheu a letra "a) Sansung Galaxy Watch" e errou';
                } else {
                    echo '7. Você escolheu a letra "c) Fitbit Versa" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg8">
                <?php
                if ($_POST['perg8'] == '8c') {
                    echo '8. Você escolheu a letra "c) Apple Pay" e acertou';
                } else if ($_POST['perg8'] == '8b') {
                    echo '8. Você escolheu a letra "b) Cash Pay" e errou';
                } else {
                    echo '8. Você escolheu a letra "a) Venmo" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg9">
                <?php
                if ($_POST['perg9'] == '9a') {
                    echo '9. Você escolheu a letra "a) Lista das empresas mais inovadoras" e acertou';
                } else if ($_POST['perg9'] == '9b') {
                    echo '9. Você escolheu a letra "b) Lista das empresas mais ricas" e errou';
                } else {
                    echo '9. Você escolheu a letra "a) Lista das empresas mais polêmicas" e errou';
                }
                ?></label><br>
            <label class="resp" for="perg10">
                <?php
                if ($_POST['perg10'] == '10c') {
                    echo '10. Você escolheu a letra "c) A indústria de tecnologia" e acertou';
                } else if ($_POST['perg10'] == '10b') {
                    echo '10. Você escolheu a letra "b) A indústria de tecnologia<br>" e errou';
                } else {
                    echo '10. Você escolheu a letra "a) A indústria automotiva" e errou';
                }
                ?></label><br>

        </div>
    </main>
</body>

</html>
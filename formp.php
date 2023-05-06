<?php
session_start();
if (!empty($_SESSION['id'])) {
} else {
    echo '<h2 class="text-center" id="restrita">Faça login antes de tentar entrar!</h2>';
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Apple</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="js/dark.js" defer></script>
</head>

<body>
    <header>
        <a href="index.php" class="title2">
           Sobre a Apple
        </a>
        <h7 id="title">Teste Apple</h7>
        <div class="dropdown">
            <a class="title2">
                Dados
            </a>
            <div class="dropdown-child">
                <a href="php/notas.php">Notas</a>
                <a href="php/users.php">Usuários</a>

            </div>
        </div>
        <a href="php/conta.php" class="title2">
           Meu Perfil
        </a>
    </header>
    <main> <?php
            echo '<h2 class="text-center" id="restrita">Olá ' . $_SESSION['nome'] . ', Seja bem vindo!</h2>';
            ?>
        <div id="intro">
            <form action="php/salvar_result.php" method="post">
                <div class="questoes">
                    <p><label value="pergunta1" id="pergunta1" style="margin-top: 20px;">1. Em que
                            cidade a Apple está sediada?</label></p>
                    <input class="radForm" type="radio" name="perg1" value="1a" id="1a" required><label for="1a">a) Nova York</label><br>
                    <input class="radForm" type="radio" name="perg1" value="1b" id="1b" required><label for="1b">b) Los Angeles</label><br>
                    <input class="radForm" type="radio" name="perg1" value="1c" id="1c" required><label for="1c">c) Cupertino</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta2" id="pergunta2" style="margin-top: 20px;">2. Quem são os
                            fundadores da Apple?</label></p>
                    <input type="radio" name="perg2" value="2a" id="2a"><label for="2a" required>a) Steve Jobs, Bill Gates e Jeff
                        Bezos</label><br>
                    <input type="radio" name="perg2" value="2b" id="2b"><label for="2b" required>b) Steve Jobs, Steve Wozniak e Ronald
                        Wayne</label><br>
                    <input type="radio" name="perg2" value="2c" id="2c"><label for="2c" required>c) Mark Zuckerberg, Larry Page e Sergey
                        Brin</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta3" id="pergunta3" style="margin-top: 20px;">3. Qual foi o
                            primeiro computador pessoal da Apple?</label></p>
                    <input class="radForm" type="radio" name="perg3" value="3a" id="3a" required><label for="3a">a) Apple II</label><br>
                    <input class="radForm" type="radio" name="perg3" value="3b" id="3b" required><label for="3b">b) Macintosh</label><br>
                    <input class="radForm" type="radio" name="perg3" value="3c" id="3c" required><label for="3c">c) Lisa</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta4" id="pergunta4" style="margin-top: 20px;">4. Quando a
                            Apple lançou o iPhone?</label></p>
                    <input class="radForm" type="radio" name="perg4" value="4a" id="4a" required><label for="4a">a) 2005</label><br>
                    <input class="radForm" type="radio" name="perg4" value="4b" id="4b" required><label for="4b">b) 2006</label><br>
                    <input class="radForm" type="radio" name="perg4" value="4c" id="4c" required><label for="4c">c) 2007</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta5" id="pergunta5" style="margin-top: 20px;">5. Qual é o
                            serviço de streaming de música da Apple?</label></p>
                    <input class="radForm" type="radio" name="perg5" value="5a" id="5a" required><label for="5a">a) Spotify</label><br>
                    <input class="radForm" type="radio" name="perg5" value="5b" id="5b" required><label for="5b">b) Tidal</label><br>
                    <input class="radForm" type="radio" name="perg5" value="5c" id="5c" required><label for="5c">c) Apple Music</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunt6" id="pergunta6" style="margin-top: 20px;">6. Qual é o
                            serviço de armazenamento em nuvem da Apple?</label></p>
                    <input class="radForm" type="radio" name="perg6" value="6a" id="6a" required><label for="6a">a) OneDrive</label><br>
                    <input class="radForm" type="radio" name="perg6" value="6b" id="6b" required><label for="6b">b) Google Drive</label><br>
                    <input class="radForm" type="radio" name="perg6" value="6c" id="6c" required><label for="6c">c) iCloud</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta7" id="pergunta7" style="margin-top: 20px;">7. Qual é o
                            relógio inteligente da Apple que se conecta ao iPhone?</label></p>
                    <input class="radForm" type="radio" name="perg7" value="7a" id="7a" required><label for="7a">a) Samsung Galaxy Watch</label><br>
                    <input class="radForm" type="radio" name="perg7" value="7b" id="7b" required><label for="7b">b) Apple Watch</label><br>
                    <input class="radForm" type="radio" name="perg7" value="7c" id="7c" required><label for="7c">c) Fitbit Versa</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta8" id="pergunta8" style="margin-top: 20px;">8. Qual é o
                            serviço de pagamento móvel da Apple?</label></p>
                    <input class="radForm" type="radio" name="perg8" value="8a" id="8a" required><label for="8a">a) Venmo</label><br>
                    <input class="radForm" type="radio" name="perg8" value="8b" id="8b" required><label for="8b">b) Cash App</label><br>
                    <input class="radForm" type="radio" name="perg8" value="8c" id="8c" required><label for="8c">c) Apple Pay</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta9" id="pergunta9" style="margin-top: 20px;">9. Em que lista
                            a Apple é frequentemente citada como um modelo para outras empresas?</label></p>
                    <input class="radForm" type="radio" name="perg9" value="9a" id="9a" required><label for="9a">a) Lista das empresas mais inovadoras</label><br>
                    <input class="radForm" type="radio" name="perg9" value="9b" id="9b" required><label for="9b">b) Lista das empresas mais ricas</label><br>
                    <input class="radForm" type="radio" name="perg9" value="9c" id="9c" required><label for="9c">c) Lista das empresas mais
                        polêmicas</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta10" id="pergunta10" style="margin-top: 20px;"> 10. Com sua
                            abordagem única para design e inovação, o que a Apple continua a liderar?</label></p>
                    <input class="radForm" type="radio" name="perg10" value="10a" id="10a" required><label for="10a">a) A indústria automotiva</label><br>
                    <input class="radForm" type="radio" name="perg10" value="10b" id="10b" required><label for="10b">b) A indústria de moda</label><br>
                    <input class="radForm" type="radio" name="perg10" value="10c" id="10c" required><label for="10c">c) A indústria de tecnologia</label><br><br>
                </div>
                <div class="text-center"><input type="submit" id="btnConfirm" name="btnTerminar" value="Terminar">
                    <a class="btnSair" href="php/logout.php">Sair</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
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
</head>

<body>
    <header>
        <a href="index.html" class="title2">
            <h7 class="title2">Sobre a Apple
        </a></h7>
        <a class="space">|</a>
        <h1 id="title">Teste Apple</h1>
        <a class="space">|</a>
        <a href="login.php" class="title2">
            <h7 class="title2">Resultados
        </a></h7>
        <a class="space">|</a>
        <a href="php/cadastrar.php" class="title2">
            <h7 class="title2">Cadastrar-se
        </a></h7>
    </header>
    <main> <?php
        echo '<h2 class="text-center" id="restrita">Olá ' . $_SESSION['nome'] . ', Seja bem vindo!</h2>
    <h2 class="text-center" ><a href="php/logout.php">Sair</a></h2>';
        ?> <div id="intro">
            <form action="php/salvar_result.php" method="post">
                <div class="questoes">
                    <p><label value="pergunta1" id="pergunta1" style="margin-top: 20px; color: #ffffff;">1. Em que
                            cidade a Apple está sediada?</label></p>
                    <input type="radio" name="perg1" value="1a"><label>a) Nova York</label><br>
                    <input type="radio" name="per1" value="1b"><label>b) Los Angeles</label><br>
                    <input type="radio" name="perg1" value="1c"><label>c) Cupertino</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta2" id="pergunta2" style="margin-top: 20px; color: #ffffff;">2. Quem são os
                            fundadores da Apple?</label></p>
                    <input type="radio" name="perg2" value="2a"><label>a) Steve Jobs, Bill Gates e Jeff
                        Bezos</label><br>
                    <input type="radio" name="perg2" value="2b"><label>b) Steve Jobs, Steve Wozniak e Ronald
                        Wayne</label><br>
                    <input type="radio" name="perg2" value="2c"><label>c) Mark Zuckerberg, Larry Page e Sergey
                        Brin</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta3" id="pergunta3" style="margin-top: 20px; color: #ffffff;">3. Qual foi o
                            primeiro computador pessoal da Apple?</label></p>
                    <input type="radio" name="perg3" value="3a"><label>a) Apple II</label><br>
                    <input type="radio" name="perg3" value="3b"><label>b) Macintosh</label><br>
                    <input type="radio" name="perg3" value="3c"><label>c) Lisa</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta4" id="pergunta4" style="margin-top: 20px; color: #ffffff;">4. Quando a
                            Apple lançou o iPhone?</label></p>
                    <input type="radio" name="perg4" value="4a"><label>a) 2005</label><br>
                    <input type="radio" name="perg4" value="4b"><label>b) 2006</label><br>
                    <input type="radio" name="perg4" value="4c"><label>c) 2007</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta5" id="pergunta5" style="margin-top: 20px; color: #ffffff;">5. Qual é o
                            serviço de streaming de música da Apple?</label></p>
                    <input type="radio" name="perg5" value="5a"><label>a) Spotify</label><br>
                    <input type="radio" name="perg5" value="5b"><label>b) Tidal</label><br>
                    <input type="radio" name="perg5" value="5c"><label>c) Apple Music</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunt6" id="pergunta6" style="margin-top: 20px; color: #ffffff;">6. Qual é o
                            serviço de armazenamento em nuvem da Apple?</label></p>
                    <input type="radio" name="perg6" value="6a"><label>a) OneDrive</label><br>
                    <input type="radio" name="perg6" value="6b"><label>b) Google Drive</label><br>
                    <input type="radio" name="perg6" value="6c"><label>c) iCloud</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta7" id="pergunta7" style="margin-top: 20px; color: #ffffff;">7. Qual é o
                            relógio inteligente da Apple que se conecta ao iPhone?</label></p>
                    <input type="radio" name="perg7" value="7a"><label>a) Samsung Galaxy Watch</label><br>
                    <input type="radio" name="perg7" value="7b"><label>b) Apple Watch</label><br>
                    <input type="radio" name="perg7" value="7c"><label>c) Fitbit Versa</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta8" id="pergunta8" style="margin-top: 20px; color: #ffffff;">8. Qual é o
                            serviço de pagamento móvel da Apple?</label></p>
                    <input type="radio" name="perg8" value="8a"><label>a) Venmo</label><br>
                    <input type="radio" name="perg8" value="8b"><label>b) Cash App</label><br>
                    <input type="radio" name="perg8" value="8c"><label>c) Apple Pay</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta9" id="pergunta9" style="margin-top: 20px; color: #ffffff;">9. Em que lista
                            a Apple é frequentemente citada como um modelo para outras empresas?</label></p>
                    <input type="radio" name="perg9" value="9a"><label>a) Lista das empresas mais inovadoras</label><br>
                    <input type="radio" name="perg9" value="9b"><label>b) Lista das empresas mais ricas</label><br>
                    <input type="radio" name="perg9" value="9c"><label>c) Lista das empresas mais polêmicas</label><br><br>
                </div>
                <div class="questoes">
                    <p><label value="pergunta10" id="pergunta10" style="margin-top: 20px; color: #ffffff;"> 10. Com sua
                        abordagem única para design e inovação, o que a Apple continua a liderar?</label></p>
                    <input type="radio" name="perg10" value="10a">a) A indústria automotiva<br>
                    <input type="radio" name="perg10" value="10b">b) A indústria de moda</label><br>
                    <input type="radio" name="perg10" value="10c">c) A indústria de tecnologia<br><br>
                </div>
                <input type="submit" class="btnTerminar" name="terminar" value="Terminar">
            </form>
        </div>
    </main>
</body>
</html>
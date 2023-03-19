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
            <h7 class="title2">Logar
        </a></h7>
        <a class="space">|</a>
        <a href="php/cadastrar.php" class="title2">
            <h7 class="title2">Cadastrar-se
        </a></h7>
    </header>
    <main>
        <?php
        echo '<h2 class="text-center" id="restrita">Olá ' . $_SESSION['nome'] . ', Seja bem vindo!</h2>
    <h2 class="text-center" ><a href="php/logout.php">Sair</a></h2>';
        ?>
        <div id="intro">
            <form action="" method="post">
            <form action="" method="post">
                <p><label value="pergunta1" id="pergunta1" style="margin-top: 20px; color: #ffffff;">1. Em que cidade a
                        Apple está sediada?</label></p>
                
                    <input type="radio" id="1a" name="fav_language" value="1a">
                    <label for="1a">a) Nova York</label><br>
                    <input type="radio" id="1b" name="fav_language" value="1b">
                    <label for="1b">b) Los Angeles</label><br>
                    <input type="radio" id="1c" name="fav_language" value="1c">
                    <label for="1c">c) Cupertino</label><br><br>
            </form> 

            <form action="" method="post">
                <p><label value="pergunta2" id="pergunta2" style="margin-top: 20px; color: #ffffff;">2. Quem são os
                        fundadores da Apple?</label></p>
                
                    <input type="radio" id="2a" name="fav_language" value="2a">
                    <label for="2a">a) Steve Jobs, Bill Gates e Jeff Bezos</label><br>
                    <input type="radio" id="2b" name="fav_language" value="2b">
                    <label for="2b">b) Steve Jobs, Steve Wozniak e Ronald Wayne</label><br>
                    <input type="radio" id="2c" name="fav_language" value="2c">
                    <label for="2c">c) Mark Zuckerberg, Larry Page e Sergey Brin</label><br><br>
            </form>        
                
            <form action="" method="post">
                <p><label value="pergunta3" id="pergunta3" style="margin-top: 20px; color: #ffffff;">3. Qual foi o
                        primeiro computador pessoal da Apple?</label></p>
                <input type="radio" id="3a" name="fav_language" value="3a">
                <label for="3a">a) Apple II</label><br>
                <input type="radio" id="3b" name="fav_language" value="3b">
                <label for="3b">b) Macintosh</label><br>
                <input type="radio" id="3c" name="fav_language" value="3c">
                <label for="3c">c) Lisa</label><br><br>
            </form>        

            <form action="" method="post">
                <p><label value="pergunta4" id="pergunta4" style="margin-top: 20px; color: #ffffff;">4. Quando a Apple
                        lançou o iPhone?</label></p>
                <input type="radio" id="4a" name="fav_language" value="4a">
                <label for="4a">a) 2005</label><br>
                <input type="radio" id="4b" name="fav_language" value="4b">
                <label for="4b">b) 2006</label><br>
                <input type="radio" id="4c" name="fav_language" value="4c">
                <label for="4c">c) 2007</label><br><br>
            </form>            

            <form action="" method="post">  
                <p><label value="pergunta5" id="pergunta5" style="margin-top: 20px; color: #ffffff;">5. Qual é o serviço
                        de streaming de música da Apple?</label></p>
                <input type="radio" id="5a" name="fav_language" value="5a">
                <label for="5a">a) Spotify</label><br>
                <input type="radio" id="5b" name="fav_language" value="5b">
                <label for="5b">b) Tidal</label><br>
                <input type="radio" id="5c" name="fav_language" value="5c">
                <label for="5c">c) Apple Music</label><br><br>
            </form>        

            <form action="" method="post">    
                <p><label value="pergunt6" id="pergunta6" style="margin-top: 20px; color: #ffffff;">6. Qual é o serviço
                        de armazenamento em nuvem da Apple?</label></p>
                <input type="radio" id="6a" name="fav_language" value="6a">
                <label for="6a">a) OneDrive</label><br>
                <input type="radio" id="6b" name="fav_language" value="6b">
                <label for="6b">b) Google Drive</label><br>
                <input type="radio" id="6c" name="fav_language" value="6c">
                <label for="6c">c) iCloud</label><br><br>
            </form>        

            <form action="" method="post">    
                <p><label value="pergunta7" id="pergunta7" style="margin-top: 20px; color: #ffffff;">7. Qual é o relógio
                        inteligente da Apple que se conecta ao iPhone?</label></p>
                <input type="radio" id="7a" name="fav_language" value="7a">
                <label for="7a">a) Samsung Galaxy Watch</label><br>
                <input type="radio" id="7b" name="fav_language" value="7b">
                <label for="7b">b) Apple Watch</label><br>
                <input type="radio" id="7c" name="fav_language" value="7c">
                <label for="7c">c) Fitbit Versa</label><br><br>
            </form>

            <form action="" method="post">        
                <p><label value="pergunta8" id="pergunta8" style="margin-top: 20px; color: #ffffff;">8. Qual é o serviço
                        de pagamento móvel da Apple?</label></p>
                <input type="radio" id="8a" name="fav_language" value="8a">
                <label for="8a">a) Venmo</label><br>
                <input type="radio" id="8b" name="fav_language" value="8b">
                <label for="8b">b) Cash App</label><br>
                <input type="radio" id="8c" name="fav_language" value="8c">
                <label for="8c">c) Apple Pay</label><br><br>
            </form>    

            <form action="" method="post">        
                <p><label value="pergunta9" id="pergunta9" style="margin-top: 20px; color: #ffffff;">9. Em que lista a
                        Apple é frequentemente citada como um modelo para outras empresas?</label></p>
                <input type="radio" id="9a" name="fav_language" value="9a">
                <label for="9a">a) Lista das empresas mais inovadoras</label><br>
                <input type="radio" id="9b" name="fav_language" value="9b">
                <label for="9b">b) Lista das empresas mais ricas</label><br>
                <input type="radio" id="9c" name="fav_language" value="9c">
                <label for="9c">c) Lista das empresas mais polêmicas</label><br><br>
            </form>

            <form action="" method="post">
                <p><label value="pergunta10" id="pergunta10" style="margin-top: 20px; color: #ffffff;"> 10. Com sua
                        abordagem única para design e inovação, o que a Apple continua a liderar?</label></p>
                <input type="radio" id="10a" name="fav_language" value="10a">
                <label for="10a">a) A indústria automotiva</label><br>
                <input type="radio" id="10b" name="fav_language" value="10b">
                <label for="10b">b) A indústria de moda</label><br>
                <input type="radio" id="10c" name="fav_language" value="10c">
                <label for="10c">c) A indústria de tecnologia</label><br>
            </form>
            <input type="submit" class="btnTerminar" name="terminar" value="Terminar">

            </form>
        </div>
    </main>
</body>

</html>
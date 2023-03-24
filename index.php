<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>

<body>
    <header>
        <div id="options">
            <h1 id="title">Sobre a Apple</h1>
            <a class="space">|</a>
            <a href="formp.php" class="title2">
                <h7 class="title2">Teste Apple
            </a></h7>
            <a class="space">|</a>
            <a href="<?php
                        if (!empty($_SESSION['id'])) {
                            echo "php/consultar.php";
                            } else {
                            echo "login.php";
                            }
                            ?>" class="title2">
                <h7 class="title2" id="logar"><?php
                                                if (!empty($_SESSION['id'])) {
                                                    echo "Resultados";
                                                } else {
                                                    echo "Logar";
                                                }
                                                ?>
            </a></h7>
            <a class="space">|</a>
            <a href="<?php
                        if (!empty($_SESSION['id'])) {
                            echo "php/logout.php";
                            } else {
                            echo "php/cadastrar.php";
                            }
                            ?>" class="title2">
                <h7 class="title2"><?php
                                                if (!empty($_SESSION['id'])) {
                                                    echo "Sair";
                                                } else {
                                                    echo "Cadastrar-se";
                                                }
                                                ?>
            </a></h7>
        </div>
    </header>
    <main>
        <div id="intro">A Apple Inc. é uma empresa multinacional de tecnologia sediada em Cupertino, Califórnia, nos
            Estados Unidos. Fundada em 1976 por Steve Jobs, Steve Wozniak e Ronald Wayne, a empresa é amplamente
            reconhecida como uma das principais impulsionadoras da revolução da computação pessoal.

            Inicialmente, a Apple se destacou no mercado de computadores pessoais com o lançamento do Apple II em 1977,
            seguido pelo Macintosh em 1984. Ao longo dos anos, a empresa diversificou suas operações e se tornou líder
            em vários mercados, incluindo smartphones, tablets e serviços digitais.<br><br>
            <img id="appleii" class="image" src="img/appleII.webp" alt="Primeiro Computador da Apple">

            Um dos principais produtos da Apple é o iPhone, lançado em 2007. Desde então, a empresa lançou uma série de
            modelos de iPhone, incluindo o iPhone 12, iPhone 13 e iPhone 14. Além disso, a Apple também lançou o iPad,
            um tablet popular entre estudantes e profissionais, e o Apple Watch, um relógio inteligente que se conecta
            ao iPhone.A empresa também é conhecida por seus serviços digitais, como a App Store, que oferece uma ampla
            gama de aplicativos para iPhone e iPad, e o Apple Music, um serviço de streaming de música que compete com o
            Spotify. Além disso, a Apple oferece serviços de armazenamento em nuvem, como o iCloud, e serviços de
            pagamento móvel, como o Apple Pay.<br><br>
            <img id="iphone14" class="image" src="img/iphone-14.webp" alt="Iphone 14">

            A Apple é uma das empresas mais valiosas do mundo e tem sido consistentemente classificada entre as empresas
            mais inovadoras. A empresa é conhecida por sua cultura corporativa distintiva e é frequentemente citada como
            um modelo para outras empresas em todo o mundo.Embora a empresa tenha enfrentado alguns desafios ao longo
            dos anos, incluindo uma luta prolongada com o FBI
            sobre o acesso a dados do iPhone de um terrorista, a Apple continua a ser uma das empresas mais influentes
            do mundo da tecnologia. Com sua abordagem única para design e inovação, a Apple continua a liderar
            aindústria de tecnologia e a moldar o futuro da computação pessoal.
        </div>

    </main>
</body>

</html>
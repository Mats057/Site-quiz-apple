<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre a Apple</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <link rel="shortcut icon" href="img/favicon.Appleico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="js/dark.js" defer></script>
</head>

<body>
    <header>
        <img id="logo" src="img/logo.png" alt="Logo da Apple">
        <div id="options">
            <h7 id="title">Sobre a Apple</h7>
            <a href="formp.php" class="title2">Teste Apple</a>
            <div class="dropdown">
                <a href="<?php
                            if (!empty($_SESSION['id'])) {
                                echo "";
                            } else {
                                echo "login.php";
                            }
                            ?>" class="title2">
                    <?php
                    if (!empty($_SESSION['id'])) {
                        echo "Dados";
                    } else {
                        echo "Logar";
                    }
                    ?>
                </a>
                <?php
                if (!empty($_SESSION['id'])) {
                    echo '<div class="dropdown-child">
                    <a href="php/notas.php">Notas</a>
                    <a href="php/users.php">Usuários</a>
                    </div>';
                } else {
                } ?>
            </div>
            <a href="<?php
                        if (!empty($_SESSION['id'])) {
                            echo "php/conta.php";
                        } else {
                            echo "php/cadastrar.php";
                        }
                        ?>" class="title2">
                <?php
                if (!empty($_SESSION['id'])) {
                    echo "Meu Perfil";
                } else {
                    echo "Cadastrar";
                }
                ?></a>
            <?php
            if (!empty($_SESSION['id'])) {
                echo "<a href='php/logout.php' class='title2' id='sair'>Sair</a>";
            } else {
            }
            ?>
        </div>
    </header>
    <main>
        <div id="textos">
            <p>&emsp;&emsp;&emsp;A Apple Inc. é uma empresa multinacional de tecnologia sediada em Cupertino, Califórnia, nos
                Estados Unidos. Fundada em 1976 por Steve Jobs, Steve Wozniak e Ronald Wayne, a empresa é amplamente
                reconhecida como uma das principais impulsionadoras da revolução da computação pessoal. Inicialmente, a Apple se destacou no mercado de computadores pessoais com o lançamento do Apple II em 1977,
                seguido pelo Macintosh em 1984. Ao longo dos anos, a empresa diversificou suas operações e se tornou líder
                em vários mercados, incluindo smartphones, tablets e serviços digitais.</p>
            <img id="appleii" class="image" src="img/appleII.webp" alt="Primeiro Computador da Apple">

            <p>&emsp;&emsp;&emsp;Um dos principais produtos da Apple é o iPhone, lançado em 2007. Desde então, a empresa lançou uma série de
                modelos de iPhone, incluindo o iPhone 12, iPhone 13 e iPhone 14. Além disso, a Apple também lançou o iPad,
                um tablet popular entre estudantes e profissionais, e o Apple Watch, um relógio inteligente que se conecta
                ao iPhone.A empresa também é conhecida por seus serviços digitais, como a App Store, que oferece uma ampla
                gama de aplicativos para iPhone e iPad, e o Apple Music, um serviço de streaming de música que compete com o
                Spotify. Além disso, a Apple oferece serviços de armazenamento em nuvem, como o iCloud, e serviços de
                pagamento móvel, como o Apple Pay.</p>
            <img id="iphone14" class="image" src="img/iphone-14.webp" alt="Iphone 14">

            <p>&emsp;&emsp;&emsp;A Apple é uma das empresas mais valiosas do mundo e tem sido consistentemente classificada entre as empresas
                mais inovadoras. A empresa é conhecida por sua cultura corporativa distintiva e é frequentemente citada como
                um modelo para outras empresas em todo o mundo.Embora a empresa tenha enfrentado alguns desafios ao longo
                dos anos, incluindo uma luta prolongada com o FBI
                sobre o acesso a dados do iPhone de um terrorista, a Apple continua a ser uma das empresas mais influentes
                do mundo da tecnologia. Com sua abordagem única para design e inovação, a Apple continua a liderar
                a indústria de tecnologia e a moldar o futuro da computação pessoal.</p>
        </div>

    </main>
</body>

</html>
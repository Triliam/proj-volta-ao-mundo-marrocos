<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Volta ao mundo - Marrocos
    </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<header>
    <nav class="navbar navbar-light " id="nav-inicial1">
        <div class="container-fluid">
            <a class="navbar-brand" href="principal">
                <p class="home"><i class="ph ph-house-line"></i> HOME</p>

            </a>
            <div class="texto-nav-principal2">
                <div class="texto-nav-principal">
                    <a class="texto-nav" href="/register"><i class="ph ph-key"></i> Cadastro</a>
                    <a class="texto-nav" href="/login"><i class="ph ph-sign-in"></i> Login</a>
                    <a class="texto-nav" href="/historia"><i class="ph ph-book-bookmark"></i> História</a>
                    <a class="texto-nav" href="{{ route('site.culturab') }}"><i class="ph ph-grains"></i> Cultura Imazighen</a>
                    <a class="texto-nav" href="culinaria"><i class="ph ph-bowl-steam"></i> Culinária</a>
                    <a class="texto-nav" href="flora"><i class="ph ph-tree"></i> Biodiversidade<i class="ph ph-bird"></i></a>
                    <a class="texto-nav" href="praias"><i class="ph ph-island"></i> Praias</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<body>
    <div class="titulo-botao">
        <button class="titulo-sub-pagina"><i class="ph-duotone ph-map-pin-area"></i> LUGARES TURISTICOS</button>
    </div>

    <div class="sos">

        <div class="text-div">
            <h2>Marrocos</h2>
            <p>
                <strong style="font-style: italic;">O Marrocos é um país africano que tem no turismo uma de suas principais atividades econômicas. Rico em diversidade, o país dispõe de um vasto litoral, de desertos, de encantadores centros históricos e de belíssimas montanhas.</strong>
            </p>

        </div>
        <div class="img-div">

            <img class="img-da-div" src="img/cidades-do-marrocos.jpg" alt="">
        </div>
    </div>

    <div class="sos">

        <div class="img-div1">
            <!-- <h2>Brasão</h2> -->

            <img class="img-da-div" src="img/marraquexe.jpg" alt="">
        </div>
        <div class="text-div1">
            <h2>Marraquexe</h2>
            <br><br>
            <p>
                Patrimônio mundial da UNESCO e repleta de monumentos por todos os lados, Marraquexe é a cidade marroquina que mais recebe turistas.

                A Praça Djemaa el-Fna é um dos pontos principais do local. Lá, os visitantes podem encontrar os tradicionais encantadores de serpentes e os contadores de história.
            </p>

        </div>
    </div>

    <!-- <h2>TESTE</h2> -->

    <div class="sos">

        <div class="text-div">
            <h2>Casablanca</h2>
            <p>
                Casablanca é uma das principais cidades de Marrocos e vale a pena uma visita. Esta grande cidade marroquina ficou mundialmente conhecida com o filme Casablanca, mas ela tem muito mais para explorar. A cidade é bem moderna e cosmopolita, apesar de preservar a sua cultura e história. Junto a alguns prédios modernos, vermos outras construções tradicionais em estilo Art Deco, características da cidade.
            </p>

            <p>
                Um dos lugares a visitar é a marginal, com dezenas de bares e restaurantes para apreciar a paisagem ou até mesmo a praia. Mas um dos pontos turísticos mais visitados de Casablanca é, sem dúvida, a Mesquita Hassan II, uma das maiores mesquitas do mundo. Ela foi construída junto ao mar e o seu minarete de 200 metros pode ser visto desde o horizonte.
            </p>

        </div>
        <div class="img-div">

            <img class="img-da-div" src="img/casablanca.jpg" alt="">
        </div>
    </div>

    <div class="sos">

        <div class="img-div1">
            <!-- <h2>Brasão</h2> -->

            <img class="img-da-div" src="img/dunas-de-erg-chebi.jpg" alt="">
        </div>
        <div class="text-div1">
            <h2>Dunas de Erg Chebi</h2>
            <br><br>
            <p>
                As Dunas de Erg Chebi ficam na parte marroquina do Deserto do Saara, uma das paradas obrigatórias em um roteiro em Marrocos. A imensidão de areia passa uma ideia de isolamento, mas o acesso às dunas é bastante fácil.
                Um fato bem interessante é que quem quiser viver uma experiência plena no local, pode optar por ficar alojado em uma tenda no próprio deserto em vez de ir para um dos albergues ou hotéis ao redor.

                Os passeios de 4 x 4 são uma boa pedida para quem gosta de um pouco mais de aventura!
            </p>

        </div>
    </div>

    <footer class="container" style="margin-top: 5px; padding-top: 5px;">
        <br>
        <p style="font-style: italic;">Local de pouso: Marrocos!</p>
        <img src="https://1.bp.blogspot.com/-SjPlDKo8Z6U/UlrGw4KFScI/AAAAAAAAHZU/mUpvbAboUnk/s1600/Morocco+flag+gif+animation.gif" alt="star" width="100px" height="70px" ;>
        <br>
        <p><a href="#">Back to top</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>

</html>

<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/styleEdit.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
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
                <a class="texto-nav1" href="/register"><i class="ph ph-key"></i>Cadastro</a>

                <a class="texto-nav1" href="historia"><i class="ph-duotone ph-book-bookmark"></i> História</a>
                <a class="texto-nav1" href="{{ route('site.culturab') }}"><i class="ph ph-grains"></i> Cultura Berbere</a>
                <a class="texto-nav1" href="culinaria"><i class="ph ph-bowl-steam"></i> Culinária</a>
                <a class="texto-nav1" href="lugares"><i class="ph ph-map-pin-area"></i> Lugares Turisticos</a>
                <a class="texto-nav1" href="flora"><i class="ph ph-tree"></i> Flora</a>
                <a class="texto-nav1" href="fauna"><i class="ph ph-bird"></i> Fauna</a>
                <a class="texto-nav1" href="flora"><i class="ph ph-island"></i> Praias</a>
            </div>
        </div>
    </nav>
</header>

<body>
    <div class="container">
        <div class="titulo-botao">
            <button class="titulo-sub-pagina"><i class="ph ph-sign-in"></i> Login </button>
        </div>

        <form class="form-login" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <footer class="container1" style="margin-top: 5px; padding-top: 5px;">
        <br>
        <p style="font-style: italic;">Local de pouso: Marrocos!</p>
        <img src="https://1.bp.blogspot.com/-SjPlDKo8Z6U/UlrGw4KFScI/AAAAAAAAHZU/mUpvbAboUnk/s1600/Morocco+flag+gif+animation.gif" alt="star" width="100px" height="70px" ;>
        <br>
    </footer>
</body>
</html>

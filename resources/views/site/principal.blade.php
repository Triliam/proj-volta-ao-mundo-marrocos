<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ⵍⵎⵖⵔⵉⴱ</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="pag-inicial">

    <nav class="navbar navbar-light navbar-transparent" id="nav-inicial">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">


                <div id="estrela">
                    <!-- <img id="star" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgn3jhYdCjhxPk_hXKLXRfUaaCgZPCF9_liEGiGX-I7Ee2nsfVbr23viFL3kGmuH5ljquw46ERLwhnl17v8bymuo7lNOkhdNxcC5EpHfZoZtvIr6KpuVM9fViu61p9679VL02lqvaAKzKA/s1600/Morocco+flag+gif+animation.gif" alt="" width="100" height="100"
                > -->
                </div>

            </a>
            <div class="texto-nav-principal">
                <a class="texto-nav" href="/register"><i class="ph ph-key"></i> Cadastro</a>
                <a class="texto-nav" href="/login"><i class="ph ph-sign-in"></i> Login</a>
                <a class="texto-nav" href="/historia"><i class="ph ph-book-bookmark"></i> História</a>
                <a class="texto-nav" href="{{ route('site.culturab') }}"><i class="ph ph-grains"></i> Cultura Imazighen</a>
                <a class="texto-nav" href="culinaria"><i class="ph ph-bowl-steam"></i> Culinária</a>
                <a class="texto-nav" href="lugares"><i class="ph ph-map-pin-area"></i> Lugares Turisticos</a>
                <a class="texto-nav" href="flora"><i class="ph ph-tree"></i> Biodiversidade<i class="ph ph-bird"></i></a>
                <a class="texto-nav" href="praias"><i class="ph ph-island"></i> Praias</a>
            </div>
        </div>
    </nav>

    <img src="{{ asset('img/4.avif') }}" alt="" type="image/avif" class="background-image">
    <!-- <div class="text-center">
        <img src="img/star-removebg-preview.png" class="rounded" alt="...">
      </div> -->
    <div class="transition-image" id="transition-image"></div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

</body>

</html>

<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="css/style1.css">

    <link rel="stylesheet" href="css/style2.css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<header>
  <nav class="navbar navbar-light " id="nav-inicial1">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <p class="home"><i class="ph ph-house-line"></i> HOME</p>

      </a>
      <div class="texto-nav-principal2">
        <a class="texto-nav1" href="historia"><i class="ph-duotone ph-book-bookmark"></i> História</a>
        <a class="texto-nav1" href="culturab" class="ph ph-grains"></i> Cultura Berbere</a>
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
  <div class="titulo-botao">
    <button class="titulo-sub-pagina"><i class="ph-duotone ph-book-bookmark"></i> Cadastro</button>
  </div>

    <form class="form-login" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Registrar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>
</html>

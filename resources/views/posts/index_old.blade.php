<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicações</title>
<!-- 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<header>
  <nav class="navbar navbar-light " id="nav-inicial1">
    <div class="container-fluid">
    <a class="navbar-brand" href="principal">
        <p class="home"><i class="ph ph-house-line"></i> HOME</p>

      </a>
      <div class="texto-nav-principal2">
      <a class="texto-nav1" href="/register"><i class="ph ph-key"></i> Cadastro</a>
      <a class="texto-nav1" href="/login"><i class="ph ph-sign-in"></i> Login</a>
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
  <div class="titulo-botao">
    <button class="titulo-sub-pagina"><i class="ph-duotone ph-book-open"></i> Publicações</button>
  </div>

 <div class="container">
    <div class="posts">
    <h1>Publique sua foto</h1>
       <button class="editar"><a href="{{ route('posts.create') }}" target="_blank">Criar Nova Publicação</a></button>
       </div>
            @foreach ($posts as $post)
                <div class="post">
                    <h2>{{ $post->title }}</h2>
                    <img class="img-post" src="{{ asset('storage/' . $post->image) }}" alt="Imagem do post" width="100%">
                    <br>
                </div>



                <div class="edit-post">
                    @can('update', $post)
                       <button class="editar"><a href="{{ route('posts.edit', $post) }}" target="_blank">Editar Publicação</a></button>
                    @endcan
                </div>

                <div class="delete-post">
                    @can('delete', $post)
                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remover Publicação</button>
                        </form>
                    @endcan
                </div>

                <h3><i class="ph ph-note-pencil"></i>  Comentários:</h3>
                    @foreach ($post->comments as $comment)
                        <div class="comment">
                            <p class="comentario">{{ $comment->content }}</p>
                            @if ($comment->image)
                            <p ><img src="{{ asset('storage/' . $comment->image) }}" alt="Imagem do comentário" width="200" class="imagem"></p>
                    @endif
                        <p>Por: {{ $comment->user->name }} em {{ $comment->created_at }}</p>
                        @can('update', $comment)
                           <button class="editar"><a href="{{ route('comments.edit', [$post, $comment]) }}" target="_blank">Editar Comentário</a></button>
                        @endcan
                        @can('delete', $comment)
                            <form method="POST" action="{{ route('comments.destroy', [$post, $comment]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Remover Comentário</button>
                            </form>
                        @endcan
                    </div>
                @endforeach
                <form method="POST" action="{{ route('comments.store', $post) }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="content">Novo Comentário:</label>
                        <textarea id="content" name="content" required></textarea>
                    </div>
                    <div>
                        <label for="image">Foto:</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <button type="submit">Publicar</button>
                </form>

            </div>
        @endforeach

<!-- Formulário para importar JSON -->
<div>
        <form method="POST" action="{{ route('importar.json') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="arquivo_json">Importar JSON:</label>
                <input type="file" id="arquivo_json" name="arquivo_json" accept=".json" required>
            </div>
            <button type="submit">Importar</button>

        </form>
    </div>

    <!-- Exibir dados JSON importados -->


    <!-- Mostrar importações JSON -->
    <!-- <div class="importacoes-json">
      <h2>Importações JSON</h2>
      @foreach ($importacoes as $importacao)
        <div>
          <h3>Importado por: {{ $importacao->user->name }} em {{ $importacao->created_at }}</h3>
          <pre>{{ json_encode(json_decode($importacao->dados), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
        </div>
        <form method="POST" action="{{ route('import-json.destroy', $importacao->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>

      @endforeach

    </div> -->
    <h2>Arquivos JSON Importados</h2>
    @foreach ($importacoes as $importacao)
        <div>
            <h3>{{ $importacao->nome_arquivo }}</h3>
            <pre>{{ $importacao->dados }}</pre> <!-- Exibir dados JSON como string formatada -->
            <form method="POST" action="{{ route('import-json.destroy', $importacao->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </div>
    @endforeach
  </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/@phosphor-icons/web"></script>
    </body>
    <footer class="container1" style="margin-top: 5px; padding-top: 5px;">
    <br>
    <p style="font-style: italic;">Local de pouso: Marrocos!</p>


    <img
      src="https://1.bp.blogspot.com/-SjPlDKo8Z6U/UlrGw4KFScI/AAAAAAAAHZU/mUpvbAboUnk/s1600/Morocco+flag+gif+animation.gif"
      alt="star" width="100px" height="70px";>
    <br>
    <p><a href="#">Back to top</a></p>

  </footer>

</html>

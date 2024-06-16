<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicações</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<header>
    <nav class="navbar navbar-light " id="nav-inicial1">
        <div class="container-fluid">
            <a class="navbar-brand" href="principal">
                <p class="home"><i class="ph ph-house-line"></i> HOME</p>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class=" botao-logoff texto-nav1 hover:text-green-600 bg-transparent border-none">
                    <i class="ph ph-sign-out"></i> Logout
                </button>
            </form>

            <div class="texto-nav-principal2">

                <a class="texto-nav1" href="historia"><i class="ph-duotone ph-book-bookmark"></i> História</a>
                <a class="texto-nav1" href="{{ route('site.culturab') }}"><i class="ph ph-grains"></i> Cultura Berbere</a>
                <a class="texto-nav1" href="culinaria"><i class="ph ph-bowl-steam"></i> Culinária</a>
                <a class="texto-nav1" href="lugares"><i class="ph ph-map-pin-area"></i> Lugares Turisticos</a>
                <a class="texto-nav1" href="flora"><i class="ph ph-tree"></i> Biodiversidade <i class="ph ph-bird"></i></a>
                <a class="texto-nav1" href="praias"><i class="ph ph-island"></i> Praias</a>

            </div>
        </div>
    </nav>
</header>

<body>
    <div class="titulo-botao">
        <button class="titulo-sub-pagina"><i class="ph-duotone ph-book-open"></i> Publicações</button>
    </div>

    <div class="container mx-auto p-4">
        <!-- <div class="posts mb-8">
      <h1 class="text-2xl font-bold mb-4">Publique sua foto</h1>
      <button class="editar bg-green-700 text-white py-2 px-4 rounded-lg"><a href="{{ route('posts.create') }}" target="_blank">Criar Nova Publicação</a></button>
    </div> -->

        <div class="posts mb-8 p-4 rounded-lg border">
            <h1 class="text-2xl font-bold mb-4">Publique sua foto</h1>
            <button class="editar bg-green-700 text-white py-2 px-4 rounded-lg">
                <a href="{{ route('posts.create') }}" target="_blank">Criar Nova Publicação</a>
            </button>
        </div>
        @foreach ($posts as $post)
        <div class="post bg-white p-4 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-bold mb-2">{{ $post->title }}</h2>
            <img class="img-post w-full h-auto rounded-md mb-4" src="{{ asset('storage/' . $post->image) }}" alt="Imagem do post">
            <div class="edit-post mb-2">
                @can('update', $post)
                <button class="editar bg-blue-500 text-white py-2 px-4 rounded-lg"><a href="{{ route('posts.edit', $post) }}" target="_blank">Editar Publicação</a></button>
                @endcan
            </div>
            <div class="delete-post mb-4">
                @can('delete', $post)
                <form method="POST" action="{{ route('posts.destroy', $post) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg">Remover Publicação</button>
                </form>
                @endcan
            </div>

            <h3 class="text-lg font-semibold mb-2"><i class="ph ph-note-pencil"></i> Comentários:</h3>
            @foreach ($post->comments as $comment)
            <div class="comment bg-gray-100 p-3 rounded-lg mb-4">
                <p class="comentario mb-2">{{ $comment->content }}</p>
                @if ($comment->image)

                <p><img class="comment-image" src="{{ asset('storage/' . $comment->image) }}" alt="Imagem do comentário" width="200" class="imagem rounded-md mb-2"></p>

                @endif
                <p>Por: {{ $comment->user->name }} em {{ $comment->created_at }}</p>
                @can('update', $comment)
                <button class="editar bg-blue-500 text-white py-2 px-4 rounded-lg mt-2"><a href="{{ route('comments.edit', [$post, $comment]) }}" target="_blank">Editar Comentário</a></button>
                @endcan
                @can('delete', $comment)
                <form method="POST" action="{{ route('comments.destroy', [$post, $comment]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg mt-2">Remover Comentário</button>
                </form>
                @endcan
            </div>
            @endforeach

            <form method="POST" action="{{ route('comments.store', $post) }}" enctype="multipart/form-data" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 mb-2">Novo Comentário:</label>
                    <textarea id="content" name="content" required class="w-full p-2 border rounded-md"></textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 mb-2">Foto:</label>
                    <input type="file" id="image" name="image" class="w-full p-2 border rounded-md">
                </div>
                <button type="submit" class="bg-green-700 text-white py-2 px-4 rounded-lg">Publicar</button>
            </form>
        </div>
        @endforeach

        <div class="bg-white p-4 rounded-lg shadow-md mb-8">
            <form method="POST" action="{{ route('importar.json') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="arquivo_json" class="block text-gray-700 mb-2">Importar JSON:</label>
                    <input type="file" id="arquivo_json" name="arquivo_json" accept=".json" required class="w-full p-2 border rounded-md">
                </div>
                <button type="submit" class="bg-green-700 text-white py-2 px-4 rounded-lg">Importar</button>
            </form>
        </div>

        <h2 class="text-2xl font-bold mb-4">Arquivos JSON Importados</h2>
        @foreach ($importacoes as $importacao)
        <div class="bg-white p-4 rounded-lg shadow-md mb-8">
            <h3 class="text-xl font-semibold">{{ $importacao->nome_arquivo }}</h3>
            <pre class="bg-gray-100 p-3 rounded-lg mb-4">{{ $importacao->dados }}</pre>
            <form method="POST" action="{{ route('import-json.destroy', $importacao->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg">Deletar</button>
            </form>
        </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

</body>
<footer class="container1 mt-5 pt-5">
    <br>
    <p class="italic">Local de pouso: Marrocos!</p>
    <img src="https://1.bp.blogspot.com/-SjPlDKo8Z6U/UlrGw4KFScI/AAAAAAAAHZU/mUpvbAboUnk/s1600/Morocco+flag+gif+animation.gif" alt="star" width="100px" height="70px">
    <br>
    <p><a href="#">Back to top</a></p>
</footer>
</html>

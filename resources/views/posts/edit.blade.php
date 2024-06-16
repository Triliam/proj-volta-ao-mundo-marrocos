<!-- resources/views/posts/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Publicação</title>

    <link rel="stylesheet" href="{{ asset('css/styleEdit.css') }}">
</head>

<body>
    <div class="container">
        <div class="titulo-botao">
            <button class="titulo-sub-pagina"><i class="ph ph-pencil"></i> Editar Publicação </button>
        </div>
        <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div>
                <label for="image">Imagem:</label>
                <input type="file" id="image" name="image">
            </div>
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </div>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>

</html>

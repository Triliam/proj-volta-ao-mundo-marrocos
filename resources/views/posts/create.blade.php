<!-- resources/views/posts/create.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Publicações</title>
    <link rel="stylesheet" href="{{ asset('css/styleEdit.css') }}">
</head>

<body>
    <div class="container">
        <div class="titulo-botao">
            <button class="titulo-sub-pagina"><i class="ph-duotone ph-book"></i> Nova Publicação </button>
        </div>
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="image">Imagem:</label>
                <input type="file" id="image" name="image" required>
            </div>
            <br>
            <button type="submit">Criar</button>
        </form>
    </div>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>
</html>

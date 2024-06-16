<!-- resources/views/comments/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comentário</title>
    <link rel="stylesheet" href="{{ asset('css/styleEdit.css') }}">

</head>

<body>
    <div class="container">
        <div class="titulo-botao">
            <button class="titulo-sub-pagina"><i class="ph ph-sign-in"></i> Editar Comentário </button>
        </div>

        <form method="POST" action="{{ route('comments.update', [$post, $comment]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="content">Comentário:</label>
                <textarea id="content" name="content" required>{{ $comment->content }}</textarea>
            </div>
            <div>
                <label for="image">Foto:</label>
                <input type="file" id="image" name="image">
            </div>
            <br>
            <button type="submit">Atualizar</button>
        </form>
    </div>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>
</html>

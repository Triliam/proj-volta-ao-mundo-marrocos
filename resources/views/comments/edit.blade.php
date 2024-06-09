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
    <h1>Editar Comentário</h1>

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
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

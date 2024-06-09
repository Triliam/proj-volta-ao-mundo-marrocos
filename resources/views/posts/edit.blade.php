<!-- resources/views/posts/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Post</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Editar Post</h1>
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
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>

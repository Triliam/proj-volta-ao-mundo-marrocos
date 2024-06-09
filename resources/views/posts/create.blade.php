<!-- resources/views/posts/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Post</title>
</head>
<body>
    <h1>Criar Novo Post</h1>

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
        <button type="submit">Criar</button>
    </form>
</body>
</html>

<!-- resources/views/comments/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>Comentários para {{ $post->title }}</h1>

    <form method="POST" action="{{ route('comments.store', ['post' => $post]) }}" enctype="multipart/form-data">
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

    <h2>Todos os Comentários</h2>
    @foreach ($comments as $comment)
    <div class="comment">
        <p>{{ $comment->content }}</p>
        @if ($comment->image)
        <div class="comment-image-container">
            <p><img class="comment-image" src="{{ asset('storage/' . $comment->image) }}" alt="Imagem do comentário" width="200"></p>
        </div>
        @endif
        <p>Por: {{ $comment->user->name }} em {{ $comment->created_at }}</p>
        @can('update', $comment)
        <a href="{{ route('comments.edit', $comment) }}">Editar</a>
        @endcan
        @can('delete', $comment)
        <form method="POST" action="{{ route('comments.destroy', $comment) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Remover</button>
        </form>
        @endcan
    </div>
    @endforeach
</body>
</html>

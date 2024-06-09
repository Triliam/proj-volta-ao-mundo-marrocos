<?php

// app/Http/Controllers/CommentController.php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CommentController extends Controller
{
    use AuthorizesRequests;
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $comment = new Comment([
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $comment->image = $path;
        }

        $post->comments()->save($comment);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post, Comment $comment)
    {
        $this->authorize('update', $comment);
        return view('comments.edit', compact('comment', 'post'));
    }

    public function update(Request $request, Post $post, Comment $comment)
    {
        $this->authorize('update', $comment);

        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $comment->update([
            'content' => $request->content,
        ]);

        if ($request->hasFile('image')) {
            if ($comment->image) {
                Storage::disk('public')->delete($comment->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $comment->image = $path;
        }

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post, Comment $comment)
    {
        $this->authorize('delete', $comment);

        if ($comment->image) {
            Storage::disk('public')->delete($comment->image);
        }

        $comment->delete();

        return redirect()->route('posts.index');
    }
}



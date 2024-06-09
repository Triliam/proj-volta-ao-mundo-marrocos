<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    // Permite que um usuário atualize seu próprio comentário
    public function update(User $user, Comment $comment)
    {
        return $user->id === $comment->user_id;
    }


    // Permite que um usuário delete seu próprio comentário
    public function delete(User $user, Comment $comment)
    {
        return $user->id === $comment->user_id;
    }


}


<?php

namespace App\Policies;


use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

        // Permite que um usuário atualize seu próprio post
        public function update(User $user, Post $post)
        {
            return $user->id === $post->user_id;
        }



        // Permite que um usuário delete seu próprio post
        public function delete(User $user, Post $post)
        {
            return $user->id === $post->user_id;
        }
}


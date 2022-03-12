<?php

namespace App\Repositories\Post;

use App\Models\Post\Post;

class PostRepository
{
    private Post $entity;

    public function __construct(Post $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity->newQuery()->get();
    }

    public function paginate()
    {
        return $this->entity->newQuery()->paginate();
    }

    public function findOrFail($id)
    {
        return $this->entity->newQuery()->findOrFail($id);
    }
}

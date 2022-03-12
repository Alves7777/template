<?php

namespace App\Services\Post;

use App\Repositories\Post\PostRepository;

class PostService
{

    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function all()
    {
        return $this->postRepository->all();
    }

    public function paginate()
    {
        return $this->postRepository->paginate();
    }

    public function findOrFail($id)
    {
        return $this->postRepository->findOrFail($id);
    }
}

<?php

namespace App\Http\Controllers\Post;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Services\Post\PostService;
use Exception;

class PostController extends Controller
{

    private AbstractView $abstract;
    private PostService $postService;

    public function __construct(PostService $postService)
    {
        parent::__construct();
        $this->postService = $postService;
        $this->abstract = new AbstractView();
        $this->abstract->setPost();
    }

    public function index()
    {
        try {
            $posts = $this->postService->paginate();
            return view($this->abstract->index, compact('posts'));
        } catch (Exception $e) {
            $this->ops($e->getMessage());
            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $posts = $this->postService->findOrFail($id);
            return view($this->abstract->show, compact('posts'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }
}

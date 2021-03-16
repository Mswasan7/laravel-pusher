<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use App\Events\PostPublished;
use Illuminate\Http\Response;

class PostController extends Controller
{

    /**
     * Saves a new post to the database
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function store(Request $request) {

        $data = $request->only(['title', 'description']);

        $post = Post::create($data);

        broadcast(new PostPublished($post))->toOthers();

        return response($post, 201);
    }
}

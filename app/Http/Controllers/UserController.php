<?php

namespace App\Http\Controllers;

use App\Events\UserEvent;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use App\Events\PostPublished;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Pusher\PushNotifications\PushNotifications;

class UserController extends Controller
{

    /**
     * Saves a new post to the database
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function getUserOne(Request $request) {

        $user_id = 1;

        broadcast(new UserEvent($user_id))->toOthers();

        return response($user_id, 201);
    }

    public function getUserTwo(Request $request) {

        $user_id = 2;

        broadcast(new UserEvent($user_id))->toOthers();

        return response($user_id, 201);
    }

    public function getUserThree(Request $request) {

        $user_id = 3;

        broadcast(new UserEvent($user_id))->toOthers();

        return response($user_id, 201);
    }

    public function getUserFour(Request $request) {

        $user_id = 4;

        broadcast(new UserEvent($user_id))->toOthers();

        return response($user_id, 201);
    }
}

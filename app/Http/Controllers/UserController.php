<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(User $user)
    {
      $posts = $user->posts()->get()->sortByDesc(function($post) {
        $comments = $post->comments->sortByDesc('created_at');

        $newestResponse = Carbon::minValue();

        $comments->each(function($comment) use (&$newestResponse) {
          $reply = $comment->replies->sortByDesc('created_at')->first();
          if (!empty($reply)) {
            $newestResponse = $newestResponse->max($reply->created_at);
          }
        });

        if (!empty($comments->toArray())) {
          $newestResponse = $newestResponse->max($comments->first()->created_at);
        }

        return $newestResponse->max($post->created_at);
      });

      return view('users.profile', compact(['user', 'posts']));
    }
}

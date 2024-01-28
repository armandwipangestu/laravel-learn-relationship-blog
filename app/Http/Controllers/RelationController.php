<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function oneToOne(Request $request)
    {
        $phone = User::find($request->id)->phone;
        return $phone;
    }

    public function oneToOneInverse(Request $request)
    {
        $user = Phone::find($request->id)->user;
        return $user;
    }

    public function oneToMany(Request $request)
    {
        $comments = Post::find($request->id)->comments;
        return $comments;
    }

    public function oneToManyInverse(Request $request)
    {
        $post = Comment::find($request->id)->post;
        return $post;
    }

    public function defaultModels(Request $request)
    {
        $author = Post::find($request->id)->user;
        return $author;
    }

    public function whereBelongsTo(Request $request)
    {
        $user = User::find($request->id);

        // manually build where clause
        // $posts = Post::where('user_id', $user->id)->get();

        // use whereBelongsTo Method
        // $posts = Post::whereBelongsTo($user)->get();

        // provide a collection instance
        $users = User::where('vip', true)->get();
        $posts = Post::whereBelongsTo($users)->get();
        // $posts = User::where('vip', true)->with('posts')->get();

        // spesify relationship
        // $posts = Post::whereBelongsTo($user, 'user')->get();
        // $posts = $user->posts;
        return $posts;
    }

    public function hasOneOfMany(Request $request)
    {
        $user = User::find($request->id);
        $summary = [];
        $summary['latestOrder'] = $user->latestOrder;
        $summary['oldestOrder'] = $user->oldestOrder;
        $summary['largestOrder'] = $user->largestOrder;

        return $summary;
    }
}

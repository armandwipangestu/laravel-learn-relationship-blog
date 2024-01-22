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
}

<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function hasOne(Request $request)
    {
        $phone = User::find($request->id)->phone;
        return $phone;
    }

    public function belongsTo(Request $request)
    {
        $user = Phone::find($request->id)->user;
        return $user;
    }
}

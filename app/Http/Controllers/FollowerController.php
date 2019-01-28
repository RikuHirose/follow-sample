<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowerController extends Controller
{
    public function follow(User $user, Request $request)
    {
        dd($request);
    }
}



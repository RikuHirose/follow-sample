<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follower;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $authUser = \Auth::user();
        $users->load('followers');
        // $isFllowing = (boolean) Follower::where('user_id', $authUser['id'])->where('follows_id', $followUser->id)->first(['id']);


        return view('home',[
            'users' => $users,
            'authUser' => $authUser
        ]);
    }

}

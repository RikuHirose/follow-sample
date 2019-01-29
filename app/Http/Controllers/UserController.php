<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follower;

class UserController extends Controller
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
    public function showFollow(User $user)
    {
        $followedId = Follower::where('user_id', $user->id)->pluck('follows_id');
        $follows = User::whereIn('id', $followedId)->get();

        return view('users.follow', [
            'follows' => $follows
        ]);
    }

    public function showFollower(User $user)
    {
        $followerId = Follower::where('follows_id', $user->id)->pluck('user_id');
        $followers = User::whereIn('id', $followerId)->get();

        return view('users.follower', [
            'followers' => $followers
        ]);
    }

}

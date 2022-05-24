<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function profile($id, Follow $follow){

      $users = $this->user->selectUserFindById($id);

      $user = auth()->user();
      $follow_count = $follow->getFollowCount($user->id);
      $follower_count = $follow->getFollowerCount($user->id);
        return view('users.profile', compact('users','follow_count','follower_count'));
    }

    public function search(){
        return view('users.search');
    }
}

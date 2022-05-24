<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(){
        $list = \DB::table('posts')->get();
        return view('posts.index',['list'=>$list]);
    }

    public function create(Request $request){
        $post = $request->input('newPost');
        $id = Auth::id();
        \DB::table('posts')->insert([
            'post' => $post,
            'user_id' => $user_id,
        ]);

        return redirect('top');
    }

    //　投稿作成画面-------------
//createが2つ同じのが定義されているからエラーが出る。
    //public function create()
    //{
    //ログインユーザーを取得
    //これがないと写真とか名前を表示できない
    //$user = auth()->user();

    //return view('posts.createForm',['user' => $user]);

    //}
}

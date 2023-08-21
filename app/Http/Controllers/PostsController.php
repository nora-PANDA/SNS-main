<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;


class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //表示(後でやる)
    public function index(){
        $list = Post::get();
        return view('posts.index');
    }
//とりあえず消しとく（）（,['posts'=>$list]）

    //投稿機能
    public function create(Request $request)
    {
        $post = $request->input('newpost');
        $user_id = Auth::id();
        Post::create(
            [
                'posts' => $post,
                'user_id' => $user_id,
            ]);
        return redirect('/top');
    }

}

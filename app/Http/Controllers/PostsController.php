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

    //表示
    public function index(){
        $posts = post::orderBy('created_at')->get();
        return view('posts.index', compact(''));

        //$lists = Post::get();
        //return view('posts.index', compact(''));
    }

//とりあえず消しとく（）（,['posts'=>$list]）

    //投稿機能〇
    public function create(Request $request)
    {
        $post = $request->input('newpost');
        $user_id = Auth::id();
        Post::create(
            [
                'post' => $post,
                'user_id' => $user_id,
            ]);
        return redirect('/top');
    }

}

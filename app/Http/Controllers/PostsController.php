<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
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
        Post::create(['posts' => $post]);
        return redirect('/top');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {
    public function index() {
        // postsテーブルからすべてのデータを取得し、変数$postに代入する
        $posts = DB::table('posts')->get();
 
        // 変数$postをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }
}



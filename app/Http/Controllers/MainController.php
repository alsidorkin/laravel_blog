<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Date;
class MainController extends Controller
{
   public function index(){

    $posts=Post::all();
    //dd($posts);
   // $posts=Post::where('is_published',0)->first();
    //  foreach($posts as $post){
    // dump($post->image);
    // return 'this is my page!!!!';
    $posts = Post::where('likes', '>', 10000)
    ->limit(10)
    ->get();

    return view('main.index',compact('posts'));
    // }
}
}
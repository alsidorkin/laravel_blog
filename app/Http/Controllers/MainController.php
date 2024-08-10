<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Date;
class MainController extends Controller
{
   public function index(){

    $posts=Post::all();
   // $posts=Post::where('is_published',0)->first();
    //  foreach($posts as $post){
    // dump($post);
    // return 'this is my page!!!!';
    $main='';
    return view('main',compact('main'));
    // }
}
}
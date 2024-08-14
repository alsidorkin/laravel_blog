<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Date;
class PostController extends Controller
{
   public function index(){

    $posts=Post::all();
    return view('posts/index',compact('posts'));
}

public function create(){
    $categories = Category::all();
   
return view('posts/create',compact('categories'));
}

public function store(){

    $data=request()->validate([
        'title'=>'string',
        'content'=>'string',
        'image'=>'string',
        'category_id' => 'nullable|exists:categories,id',
        'created_at'=>'timezone',  
    ]);  
    // dd($data['category_id']);
    
    $data['is_published'] = 0;
   Post::create($data);
return redirect()->route('post.index');
}



public function show(Post $post){
return view('posts/show',compact('post'));
}

public function edit(Post $post){
    $categories = Category::all();

    // dd($categories);
return view('posts/edit',compact('post', 'categories'));
}


public function update(Post $post){

    $data=request()->validate([
      'title' => 'string',
        'content' => 'string',
        'image' => 'string',
        'category_id' => 'nullable|exists:categories,id',
        'likes' => 'nullable|integer',
        'is_published' => 'nullable|boolean',
        
    ]);
        $post->update($data);  
   return redirect()->route('post.show',$post->id);
}

public function destroy(Post $post){
    $post->delete();
    return redirect()->route('post.index');   
}


public function firstOrCreate(){
    $created_at=new \DateTime();
    $updated_at=new \DateTime();
    $postsArr=[
['title'=>'love',
'content'=>'love is a best ',
'image'=>'lovepath',
'likes'=>99999,
'is_published'=>1,
'created_at'=>$created_at,
'updated_at'=>$updated_at,
]
    ];

 $post=Post::firstOrCreate( [
   'title'=>'love', 
 ],[
 'title'=>'love',
 'content'=>'love is a best ',
 'image'=>'lovepath',
 'likes'=>99999,
 'is_published'=>1,
 'created_at'=>$created_at,
 'updated_at'=>$updated_at,
]);

   dump($post->content);
   dd('finish');
}


public function updateOrCreate(){
    $created_at=new \DateTime();
    $updated_at=new \DateTime();
    $postsArr=[
['title'=>'love',
'content'=>'love is a best ',
'image'=>'lovepath',
'likes'=>99999,
'is_published'=>1,
'created_at'=>$created_at,
'updated_at'=>$updated_at,
]
    ];

 $post=Post::updateOrCreate( [
   'title'=>'love', 
 ],[
 'title'=>'love',
 'content'=>'love is a best ',
 'image'=>'lovepath',
 'likes'=>99999,
 'is_published'=>1,
 'created_at'=>$created_at,
 'updated_at'=>$updated_at,
]);

   dump($post->content);
   dd('finish');
  }

}
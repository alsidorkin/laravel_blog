<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Date;
class PostController extends Controller
{
   public function index(){

    $posts=Post::all();
   // $posts=Post::where('is_published',0)->first();
    //  foreach($posts as $post){
    // dump($post);
    // return 'this is my page!!!!';
    return view('posts/index',compact('posts'));
    // }
}

public function create(){

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
],

['title'=>'love',
'content'=>'love is a best ',
'image'=>'lovepath',
'likes'=>99999,
'is_published'=>1,
'created_at'=>$created_at,
'updated_at'=>$updated_at,
]
    ];
foreach($postsArr as $item){
    // dd($item);
    Post::create($item);
}
   
    
}

public function update(){

    $post=Post::find(1);
    // dd($post);

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
],

// ['title'=>'love',
// 'content'=>'love is a best ',
// 'image'=>'lovepath',
// 'likes'=>99999,
// 'is_published'=>1,
// 'created_at'=>$created_at,
// 'updated_at'=>$updated_at,
// ]
    ];
// foreach($postsArr as $item){
    // dd($item);
    $post->update([
    'title'=>'love',
    'content'=>'love is a best ',
    'image'=>'lovepath',
    'likes'=>99999,
    'is_published'=>1,
    'created_at'=>$created_at,
    'updated_at'=>$updated_at,
    ]);
    dd('update');
// }
   
    
}

public function delete(){

    $post=Post::withTrashed()->find(1);
    $post->restore();
    // dd($post);

    $post->delete();
    dd('delete');

   
    
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
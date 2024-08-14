<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $categories=Category::all();
        
        return view('categories/index',compact('categories'));
    }
    
    public function create(){
      
    return view('categories/create');
    }
    
    public function store(){
        
        $data=request()->validate([
            'title'=>'string',
            'description'=>'string',    
        ]);
        Category::create($data);
    return redirect()->route('category.index');
    }
    
    
    
    public function show(Category $category){
    return view('categories/show',compact('category'));
    }
    
    public function edit(Category $category){
    return view('categories/edit',compact('category'));
    }
    
    
    public function update(Category $category){
    
        $data=request()->validate([
          'title' => 'string',
          'description' => 'string',            
        ]);
            $category->update($data);  
       return redirect()->route('category.show',$category->id);
    }
    
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category.index');   
    }
}

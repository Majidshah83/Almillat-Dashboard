<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Validator;
class BlogController extends Controller
{

    public function index()
    {
        $blog=Blog::all();
        return view('dashboard.blog.index',compact('blog'));
    }
     public function store(Request $request)
     {


      $result= new Blog();
      if($request->file('image')) {

         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/blog/',$filename);
         $result->image = $filename;
     }
      $result->title=$request->title;
      $result->content=$request->content;
      $result->tag=$request->tag;
      $result->save();
      return redirect()->route('blog-index')
            ->with('success', 'Blog created successfully.');
     }
     public function create()
     {
        return view('dashboard.blog.create');
     }
     public function edit($id)
     {
        $blog =Blog::find($id);
        return view('dashboard.blog.edit',compact('blog'));
     }

     public function destroy($id)
    {
       $blog=Blog::where('id',$id)->first();
       $blog->delete();
       return redirect()->route('blog-index')
            ->with('success', 'Blog deleted successfully.');
    }
    public function update(Request $request)
    {

         $blog=Blog::where('id',$request->id)->first();
         if($request->file('image')) {
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/blog/',$filename);

       }else{
         $filename=$blog->image;
       }


    $blog->title=$request->title;
    $blog->content=$request->content;
    $blog->tag=$request->tag;
    $blog->image=$filename;

        $blog->update();
         return redirect()->route('blog-index')
            ->with('success', 'Blog updated successfully.');
    }

}
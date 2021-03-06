<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Image;
use Validator;
class BlogController extends Controller
{

    public function index()
    {
        $blog=Blog::with('images')->get();

             return view('dashboard.blog.index',compact('blog'));
    }
     public function store(Request $request)
     {


      $result= new Blog();
      $image=new Image();
      if($request->file('image')) {

         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/blog/',$filename);

         $image->image=$filename;

     }



      $image->save();
      $id=$image->id;
      $result->title=$request->title;
      $result->content=$request->content;
      $result->tag=$request->tag;
      $result->image_id=$id;
      $result->save();



      return redirect()->route('blog-index')
            ->with('success', 'Blog created successfully.');
     }
     public function create()
     {
        $storeImage=Image::all();
        return view('dashboard.blog.create',compact('storeImage'));
     }
     public function edit($id)
     {
        $blog=Blog::with('images')->where('id',$id)->first();
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
         $filename=$blog->images->image;
       }


    $blog->title=$request->title;
    $blog->content=$request->content;
    $blog->tag=$request->tag;
    $blog->images->image=$filename;
    $blog->update();
     $blog->images->update();

         return redirect()->route('blog-index')
            ->with('success', 'Blog updated successfully.');
    }
public function addMedia(){
    $storeImage=Image::all();
    return view('dashboard.layouts.addMedia',compact('storeImage'));
}

}

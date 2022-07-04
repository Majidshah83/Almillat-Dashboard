<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
     public function index()
    {
        $service=Service::all();
        return view('dashboard.services.index',compact('service'));
    }
     public function store(Request $request)
     {


      $result= new Service();
      if($request->file('image')) {

         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/service/',$filename);
         $result->image = $filename;
     }
      $result->name=$request->name;
      $result->long_descrition=$request->long_descrition;
      $result->short_descrition=$request->short_descrition;
      $result->save();
      return redirect()->route('service-index')
            ->with('success', 'Service created successfully.');
     }
     public function create()
     {
        return view('dashboard.services.create');
     }
     public function edit($id)
     {
        $service=Service::find($id);

        return view('dashboard.services.edit',compact('service'));
     }

     public function destroy($id)
    {
       $blog=Service::where('id',$id)->first();
       $blog->delete();
       return redirect()->route('service-index')
            ->with('success', 'Service deleted successfully.');
    }
    public function update(Request $request)
    {

         $blog=Service::where('id',$request->id)->first();
         if($request->file('image')) {
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/service/',$filename);
         

       }else{
         $filename=$blog->image;
       }


    $blog->name=$request->name;
    $blog->short_descrition=$request->short_descrition;
    $blog->long_descrition=$request->long_descrition;
    $blog->image=$filename;

        $blog->update();
         return redirect()->route('service-index')
            ->with('success', 'Service updated successfully.');
    }
}
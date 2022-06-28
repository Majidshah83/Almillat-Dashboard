<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    public function show()
    {
        $logo=Logo::all();
        return view('dashboard.logo.index',compact('logo'));
    }
    public function create()
    {
        return view('dashboard.logo.create');
    }

    public function store(Request $request)
    {
      $logo= new Logo();

    if($request->file('image')) {

         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/logo/',$filename);
         $logo->image = $filename;
     }
    $logo->save();
     return redirect()->route('logo-index')
            ->with('success', 'Logo created successfully.');

    }

      public function edit($id)
    {
        $logo =Logo::find($id);


        return view('dashboard.logo.edit',compact('logo'));
    }
    public function update(Request $request)
    {

         $logo= Logo::where('id',$request->id)->first();
         if($request->file('image')) {
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/logo/',$filename);
         $logo->image = $filename;
     }
     $logo->update();
           return redirect()->route('logo-index')
            ->with('success', 'Logo updated successfully.');


    }
    public function destroy($id)
    {
       $logo=Logo::where('id',$id)->first();
       $logo->delete();
       return redirect()->route('logo-index')
            ->with('success', 'Logo deleted successfully.');
    }
    public function showLogo()
    {
        $logo=Logo::all();

        return view('dashboard.layouts.sideMenu',compact('logo'));
    }

}
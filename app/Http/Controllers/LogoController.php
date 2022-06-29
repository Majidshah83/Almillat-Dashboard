<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\Auth;
class LogoController extends Controller
{
    public function index()
    {
        //seo tags
        $meta_title='ShowLogo';
        $meta_description='Amilat Logo Show';
        $meta_keywords='Logo,Amilat Logo,Shape of Logo,Number of logo';
        //logo
        $logo=Logo::all();
        return view('dashboard.logo.index',compact('logo','meta_title','meta_description','meta_keywords'));
    }
    public function create()
    {

        //seo tags
        $meta_title='Create Logo';
        $meta_description='Here Create Amilat Logo';
        $meta_keywords='Logo,Amilat Logo,Shape of Logo,Number of logo,Create Logo';

        return view('dashboard.logo.create',compact('meta_title','meta_description','meta_keywords'));
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
     $logo->meta_title=$request->meta_title;
     $logo->meta_description=$request->meta_description;
     $logo->meta_keywords=$request->meta_keywords;
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
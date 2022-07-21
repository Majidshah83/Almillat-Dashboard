<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textnomial;
class TextnomialController extends Controller
{
    public function index()
    {
        $textnomial=Textnomial::all();
    return view('dashboard.textnomial.index',compact('textnomial'));

    }
     public function create()
     {
        return view('dashboard.textnomial.create');
     }
     public function store(Request $request)
     {
         $result= new Textnomial();
      if($request->file('image')) {


         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/textnomial/',$filename);
         $result->image = $filename;
     }
      $result->name=$request->name;
      $result->email=$request->email;
      $result->message=$request->message;
      $result->save();
      return redirect()->route('textnomial-index')
            ->with('success', 'Textnomial created successfully.');
     }
     public function destroy($id)
    {
       $Textnomial=Textnomial::where('id',$id)->first();
       $Textnomial->delete();
       return redirect()->route('textnomial-index')
            ->with('success', 'Textnomial deleted successfully.');
    }
   public function changeSatatus(Request $request)
    {
      $userprofile=Textnomial::find($request->id);
       $userprofile->satatus=$request->satatus;
       $userprofile->save();
       return response()->json([
           'success'=>'status change Successfully',
       ]);

    }


}
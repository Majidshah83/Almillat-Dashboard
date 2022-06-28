<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
      public function getprofile()
      {

        $user=Auth::User();
        return view('dashboard.layouts.updateProfile',compact('user'));
      }
      public function updateProfile(Request $request)
      {

         $profile=User::where('id',$request->id)->first();
         if($request->file('image')) {
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/profile/',$filename);

       }else{
         $filename=$profile->image;
       }
        

        $profile->first_name=$request->first_name;
        $profile->last_name=$request->last_name;
        $profile->email=$request->email;
        $profile->city=$request->city;
        $profile->adress=$request->adress;
        $profile->phone_no=$request->phone_no;
        $profile->zipCode=$request->zipCode;
        $profile->image=$filename;

        $profile->update();
         return redirect()->route('get-profile')
            ->with('success', 'Profile updated successfully.');



      }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR use only single facades
use Artesaos\SEOTools\Facades\SEOTools;


class ProfileController extends Controller
{
      public function getprofile()
      {

        $user=Auth::User();
        //Seo title
        //seo tags
        $meta_title='Update Profile';
        $meta_description='Amilat User Update Profile';
        $meta_keywords='Profile,Amilat Profile,Profile Image ,Profile Detail';
        return view('dashboard.layouts.updateProfile',compact('user','meta_title','meta_description','meta_keywords'));
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
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Logo;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {

        return view('dashboard.layouts.userLogin');
    }


    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');

        }

        return redirect()->route('login')->with('message', 'Login details are not valid!');
    }





    public function registration()
    {
        return view('dashboard.layouts.userRegister');
    }


    public function customRegistration(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'city' => 'required',
            'adress' => 'required',
            'image' => 'required',
            'phone_no' => 'required|min:11|numeric',
            'zipCode' => 'required'

        ]);
 
        $data = new User();
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->city=$request->city;
        $data->adress=$request->adress;
        $data->phone_no=$request->phone_no;
        $data->zipCode=$request->zipCode;
        if($request->file('image')) {
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/profile/',$filename);
         $data->image = $filename;
     }
        $data->save();
        return redirect()->route('login')->with('message', 'You are Rigster Successfully!');
    }




    public function dashboard()
    {
        //dd('ok');
        if(Auth::check()){



            return view('dashboard.layouts.dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect()->route('login');
    }
    public function changePasswordPost(Request $request) {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->get('new-password'));

        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }
}
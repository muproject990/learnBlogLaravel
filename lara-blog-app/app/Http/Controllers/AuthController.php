<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\User;
use Hash;
use Mail;
use Str;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login()
    {

        return view("auth.login");
    }
    public function register()
    {
        return view("auth.register");
    }
    public function logout()
    {
        die;
    }


    public function create_user(Request $request)
    {
        // dd($request->all()); for display in url

        request()->validate([
            "email" => "required|email|unique:users",
            "password" => "required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/"
            ,
            "name" => "required|min:8"
        ]);
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);


        $save->remember_token = Str::random(40);
        $save->save();
        
        Mail::to($save->email)->send(new RegisterMail($save));

        return redirect("login")->with("success", "Registered New User");



    }
}

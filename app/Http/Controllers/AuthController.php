<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginview(){
        return view('User.login');
    }
    public function login(Request $req){
        // dd($req);
        $savedata = $req->input();
        // dd($savedata);
        $req->session()->put('user',$savedata['email']);
        return redirect()->route('firstpage');

    }
}

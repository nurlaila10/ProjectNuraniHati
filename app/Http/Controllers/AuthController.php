<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Else_;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(Request $request)
    {
        $data = User::where('email', $request->email)->firstOrfail();
        if($data){
            if(Hash::check($request->password,$data->password)){
                session(['berhasil_login' => true]);
                return redirect('/dashboard-admin');
            }else {
                return redirect('/signin')->with('message', 'Email atau Password salah');
            }
        }else {
            return redirect('/signin')->with('message', 'Email atau Password salah');
        }

    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        Redirect::back();
        return redirect('/signin');
    }
}

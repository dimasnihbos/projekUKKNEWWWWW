<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller

{

function log()
    {
        $login = "Login";

        return view('login', ['login' => $login]);
    }

    // function createlog(Request $request){
    //     $login = $request -> only("username", "password");
    //     if(Auth::attempt($login)){
    //         return redirect("/home");
    //     }else{
    //         return redirect("/login")->with("error","username atau password salah");
    //     }
    // }

    function logout(){
        Auth::logout();

        return redirect("/register");
    }

function register()
    {
        $regis = "Registrasi";

        return view('register', ['regis' => $regis]);
    }

}
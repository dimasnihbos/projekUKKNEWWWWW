<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanController extends Controller
{
    function home() {
        return view('home');
    }
}

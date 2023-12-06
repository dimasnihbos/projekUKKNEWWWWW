<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penjualanController extends Controller
{
    function penjualan() {
        return view('datapenjualan');
    }

    function detail(){
        return view('detail');
    }
}

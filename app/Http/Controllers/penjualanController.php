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

    function beli() {
        $penjualan = "Penjualan";

        return view('penjualan', ['penjualan' => $penjualan]);
    }
}

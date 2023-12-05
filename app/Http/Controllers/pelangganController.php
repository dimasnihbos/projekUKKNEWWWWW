<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelangganController extends Controller
{
    function tambahpelanggan()
    {
        $insert = "Tambah Data Pelanggan";

        return view('tambahpelanggan', ['tambah' => $insert]);
    }
}

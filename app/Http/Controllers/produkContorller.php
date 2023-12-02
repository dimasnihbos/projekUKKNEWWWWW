<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkContorller extends Controller
{
    function insert() {
        $tambah = "Tambahkan Stok";

        return view('tambahproduk', ['tambah' => $tambah]);
    }
    
    function update() {
        $update = "Update Stok";

        return view('updatestok', ['update' => $update]);
    }
}

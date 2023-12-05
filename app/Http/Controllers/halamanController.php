<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\produk;
use App\Models\pelanggan;


class halamanController extends Controller
{
    function home() {
        return view('home');
    }

    function delete($id){
        $kasir = DB :: table('produk')->where('ProdukID', '=', $id)->delete();
  
         return redirect()->back();
      }

    function produk() {
        $produk = "Data Produk";

        $data = produk::all();

        return view('produk', ['Data Produk' => $produk, 'produk' => $data]);
    }  

    function pelanggan() {
        $pelanggan = "Data Pelanggan";

        $data = pelanggan::all();

        return view('pelanggan', ['Data Pelanggan' => $pelanggan, 'pelanggan' => $data]);
    }  
}

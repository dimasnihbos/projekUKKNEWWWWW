<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class halamanController extends Controller
{
    function home() {
        return view('home');
    }

    function delete($id){
        $kasir = DB :: table('produk')->where('ProdukID', '=', $id)->delete();
  
         return redirect()->back();
      }
}

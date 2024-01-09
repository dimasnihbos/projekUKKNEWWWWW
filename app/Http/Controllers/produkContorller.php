<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class produkContorller extends Controller
{
    function insert() {
        $tambah = "Tambahkan Stok";

        return view('tambahproduk', ['tambah' => $tambah]);
    }
    
    function edit($id){
        $id = (int) $id;        
        
        $affected = DB::table('produk')
              ->where('ProdukID', $id)
              ->update(['produk' => request()->NamaProduk]);

    return redirect('produk');
    }


    function update($id)
    {
        $produk = DB::table('produk')
            ->where('ProdukID', '=', $id)
            ->first();
        return view('updatestok', ['produk' => $produk]);
    }

    function perbarui(Request $request, $id){
        $stok = $request->Stok;
        $harga = $request->Harga;
        $nama = $request->NamaProduk;
        DB::table('produk')->where('ProdukID', $id)
        ->update([
            'Stok' => $stok,
            'Harga' => $harga,
            'NamaProduk' => $nama,
        ]);
        return redirect("/produk");
    }

    function delete($id){
        $produk = DB :: table('produk')->where('ProdukID', '=', $id)->delete();
  
         return redirect()->back();
      }
}

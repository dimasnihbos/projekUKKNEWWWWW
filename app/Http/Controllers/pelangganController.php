<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pelangganController extends Controller
{
    function tambahpelanggan()
    {
        $insert = "Tambah Data Pelanggan";

        return view('tambahpelanggan', ['tambah' => $insert]);
    }

    function hapus($id){
        $pelanggan = DB :: table('pelanggan')->where('PelangganID', '=', $id)->delete();
  
         return redirect()->back();
      }

      function update($id)
      {
          $pelanggan = DB::table('pelanggan')
              ->where('PelangganID', '=', $id)
              ->first();
          return view('updatepelanggan', ['pelanggan' => $pelanggan]);
      }

      function tampil($id){
        $pelanggan = DB::table('pelanggan')
            ->where('pelangganID', '=', $id)
            ->first();
        return view('updatepelanggan', ['pelanggan' => $pelanggan]);
      }
      
      function perbarui(Request $request, $id){
          $NamaPelanggan = $request->NamaPelanggan;
          $Alamat = $request->Alamat;
          $NomorTelepon = $request->NomorTelepon;
          DB::table('pelanggan')->where('PelangganID', $id)
          ->update([
              'NamaPelanggan' => $NamaPelanggan,
              'Alamat' => $Alamat,
              'NomorTelepon' => $NomorTelepon,
          ]);
          return redirect("/pelanggan");
      }
}

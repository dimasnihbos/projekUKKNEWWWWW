<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pelanggan";

    protected $fillable = ['PelangganID', 'NamaPelanggan', 'Alamat', 'NomorTelepon'];
}

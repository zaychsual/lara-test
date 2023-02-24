<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\MongoDB\Eloquent\Model as Eloquent;

class Kendaraan extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'kendaraan';

    protected $fillable = ["tahun_keluaran", "warna", "harga"];
}

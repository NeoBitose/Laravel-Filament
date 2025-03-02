<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'harga_barang',
        'stok_barang',
        'status_barang'
    ];
}

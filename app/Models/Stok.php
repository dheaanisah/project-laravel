<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory,HasUuids;
    public $incrementing = false;
    protected $table = 'stok';
    protected $fillable = ['kode_barang','nama_barang','kategori_barang','harga','jumlah'];
}

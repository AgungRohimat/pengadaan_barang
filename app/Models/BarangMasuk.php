<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    //memberikan akses data apa saja yang bisa di lihat
    protected $visible = ['tanggal', 'merekhp', 'jenishp', 'jumlahmasuk'];
    //memberikan akses data apa saja yang bisa diisi
    protected $fillable = ['tanggal', 'merekhp', 'jenishp', 'jumlahmasuk'];

    public function produks()
    {
        return $this->hasMany('App\Produk');
    }

}

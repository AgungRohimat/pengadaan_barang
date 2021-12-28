<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // memberikan akses data apa saja yang bisa di lihat
    protected $visible = ['merekhp'];

    // memberikan akses data apa saja yang  bisa diisi
    protected $fillable = ['merekhp'];

    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    // membuat relasi one to many
    public function BarangMasuk()
    {
        return $this->belongsTo('App\BarangMasuk');
    }

}

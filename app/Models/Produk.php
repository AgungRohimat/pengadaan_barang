<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public function barangmasuk () {
        // data model "authors" bisa memiliki banyak data
        //dari model "book" memalalui fk "author_id"
        $this->hasMany('App\Models\BarangMasuk','id_produk');
    }
    public function barangkeluar () {
        // data model "authors" bisa memiliki banyak data
        //dari model "book" memalalui fk "author_id"
        $this->hasMany('App\Models\BarangKeluar','id_produk');
    }


}

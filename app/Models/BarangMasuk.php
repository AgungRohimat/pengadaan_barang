<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    public function produk() {
        // data model "authors" bisa memiliki banyak data
        //dari model "book" memalalui fk "author_id"
        return $this->belongsTo('App\Models\Produk','id_produk');
    }

}

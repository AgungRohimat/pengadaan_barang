<?php

namespace App\Models;
use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public function barangmasuk () {
        // data model "authors" bisa memiliki banyak data
        //dari model "book" memalalui fk "author_id"
        // $this->hasMany('App\Models\BarangMasuk','id_produk');
        return $this->hasMany('App\Models\BarangMasuk','id_produk');
    }
    public function barangkeluar () {
        // data model "authors" bisa memiliki banyak data
        //dari model "book" memalalui fk "author_id"
        $this->hasMany('App\Models\BarangKeluar','id_produk');
    }
  public static function boot()
    {
        parent::boot();
        self::deleting(function ($produk) {
            if ($produk->barangmasuk->count() > 0) {
                Alert::error('Failed', 'Data not deleted');
                return false;
            }
        });
    }



}

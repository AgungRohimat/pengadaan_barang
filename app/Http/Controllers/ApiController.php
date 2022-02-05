<?php

namespace App\Http\Controllers;
use App\Models\Produk;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        //  Menampilkan data Table Produk
        $produk = Produk::all();

            //Ubah ke Json
       return response()->json([
            'success' => true,
            'message' => 'list Data Produk',
            'data' => $produk
        ], 200);

    }
    public function create()
    {
       //

    }

    public function store(Request $request){
        $produk = new Produk;
        // $produk->tanggal = $request->tanggal;
        $produk->merekhp = $request->merekhp;
        $produk->jenishp = $request->jenishp;
        $produk->stok = $request->stok;

        $produk->save();
        return response()->json([
            'success' => true,
            'message' => 'list Tambah Data Produk',
            'data' => $produk
        ], 200);
    }

    public function show($id){
        $produk = Produk::find($id);

        //Ubah ke Json
   return response()->json([
        'success' => true,
        'message' => 'list Data Produk',
        'data' => $produk
    ], 200);
    }

    public function edit($id){
        //
    }
    public function update(Request $request,$id)
    {
        // $produk = Produk::findOrFail($id);
        // $produk->tanggal = $request->tanggal;
        // $produk->merekhp = $request->merekhp;
        // $produk->jenishp = $request->jenishp;
        // $produk->stok = $request->stok;
        // $produk->save();
        // return redirect()->route('produk.index');

        $produk = Produk::findOrFail($id);
        $produk->merekhp = $request->merekhp;
        $produk->jenishp = $request->jenishp;
        $produk->stok = $request->stok;
        $produk->save();
        return response()->json([
            'success' => true,
            'message' => 'list Tambah Data Produk',
            'data' => $produk
        ], 200);

    }

}

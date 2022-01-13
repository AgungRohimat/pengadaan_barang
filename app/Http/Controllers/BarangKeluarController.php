<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Produk;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangkeluar = BarangKeluar::all();
        return view('barangkeluar.index', compact('barangkeluar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view('barangkeluar.create', compact('produk'));
        // return view('barangkeluar.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate(
        //     ['id_produk' => 'required',
        //         'merekhp' => 'required',
        //     'jenishp' => 'required',
        //     'tanggal' => 'required',
        //     'jumlahkeluar' => 'required',
        //     ]);
//   $barangkeluar->merekhp = $request->merekhp;
//         $barangkeluar->jenishp = $request->jenishp;

        $barangkeluar = new BarangKeluar;
        $barangkeluar->id_produk = $request->id_produk;
        $barangkeluar->jumlahkeluar = $request->jumlahkeluar;
        $barangkeluar->tanggal = $request->tanggal;
        $barangkeluar->save();

        $produk = Produk::findOrFail($request->id_produk);
        $produk->stok -= $request->jumlahkeluar;
        $produk->save();
        return redirect()->route('barangkeluar.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangkeluar = BarangKeluar::findOrFail($id);
        return view('barangkeluar.show', compact('barangkeluar'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangkeluar = BarangKeluar::findOrFail($id);
        $produk = Produk::all();
        return view('barangkeluar.edit', compact('barangkeluar', 'produk'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangKeluar $barangKeluar)
    {
        $validated = $request->validate(
            ['id' => 'required',
            ]);

        $barangkeluar = BarangKeluar::findOrFail($id);
        $barangkeluar->id = $request->id;
        $barangkeluar->save();
        return redirect()->route('barangkeluar.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangKeluar $barangKeluar)
    {
        $barangkeluar = BarangKeluar::findOrFail($id);
        $barangkeluar->delete();
        return redirect()->route('barangkeluar.index');

    }
}

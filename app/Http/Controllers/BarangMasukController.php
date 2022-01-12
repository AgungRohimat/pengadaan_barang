<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Produk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangmasuk = BarangMasuk::all();
        return view('barangmasuk.index',compact('barangmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view('barangmasuk.create',compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barangmasuk = new BarangMasuk;
        $barangmasuk->id_produk = $request->id_produk;
        $barangmasuk->jumlahmasuk = $request->jumlahmasuk;
        $barangmasuk->tanggal = $request->tanggal;
        $barangmasuk->save();

        $produk = Produk::findOrFail($request->id_produk);
        $produk->stok += $request->jumlahmasuk;
        $produk->save();

        return redirect()->route('barangmasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $barangmasuk = BarangMasuk::findOrFail($id);
        // return view('barangmasuk.show', compact('barangmasuk'));

        $barangmasuk = BarangMasuk::findOrFail($id);
        $produk = Produk::all();
        return view('barangmasuk.show', compact('barangmasuk', 'produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangmasuk = BarangMasuk::findOrFail($id);
        $produk = Produk::all();
        return view('barangmasuk.edit', compact('barangmasuk', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barangmasuk = BarangMasuk::findOrFail($id);
        $barangmasuk->tanggal = $request->tanggal;
        $barangmasuk->merekhp = $request->merekhp;
        $barangmasuk->jenishp = $request->jenishp;

        $barangmasuk->jumlahmasuk = $request->jumlahmasuk;

        $barangmasuk->save();
        return redirect()->route('barangmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangmasuk = BarangMasuk::findOrFail($id);
        $barangmasuk->delete();
        return redirect()->route('barangmasuk.index');

    }
}

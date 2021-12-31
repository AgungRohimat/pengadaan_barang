<?php

namespace App\Http\Controllers;

use App\Models\LaporanMasuk;
use Illuminate\Http\Request;

class LaporanMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanmasuk = LaporanMasuk::all();
        return view('laporanmasuk.index', compact('laporanmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporanmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            ['merekhp' => 'required']
        );
        $laporanmasuk = new LaporanMasuk;
        $laporanmasuk->id = $request->id;
        $laporanmasuk->save();
        return redirect()->route('laporanmasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanMasuk  $laporanMasuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporanmasuk = LaporanMasuk::findOrFail($id);
        return view('laporanmasuk.show', compact('laporanmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanMasuk  $laporanMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanMasuk $laporanMasuk)
    {
        $laporanmasuk = LaporanMasuk::findOrFail($id);
        return view('laporanmasuk.edit', compact('barangmasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaporanMasuk  $laporanMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaporanMasuk $laporanMasuk)
    {
        $validated = $request->validate(
            ['id' => 'required']
        );
        $laporanmasuk = LaporanMasuk::findOrFail($id);
        $laporanmasuk->$id = $request->id;
        $barangmasuk->save();
        return redirect()->route('laporanmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanMasuk  $laporanMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanMasuk $laporanMasuk)
    {
        return redirect()->route('barangmasuk.index');
    }
}

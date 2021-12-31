<?php

namespace App\Http\Controllers;

use App\Models\LaporanKeluar;
use Illuminate\Http\Request;

class LaporanKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporankeluar = LaporanKeluar::all();
        return view('laporankeluar.index', compact('laporankeluar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporankeluar.create');

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
        $laporankeluar = new LaporanKeluar;
        $laporankeluar->id = $request->id;
        $laporankeluar->save();
        return redirect()->route('laporankeluar.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanKeluar  $laporanKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanKeluar $laporanKeluar)
    {
        $laporankeluar = LaporanKeluar::findOrFail($id);
        return view('laporankeluar.show', compact('laporankeluar'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanKeluar  $laporanKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanKeluar $laporanKeluar)
    {
        $laporankeluar = LaporanKeluar::findOrFail($id);
        return view('laporankeluar.edit', compact('barangkeluar'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaporanKeluar  $laporanKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaporanKeluar $laporanKeluar)
    {
        $validated = $request->validate(
            ['id' => 'required']
        );
        $laporankeluar = LaporanKeluar::findOrFail($id);
        $laporankeluar->$id = $request->id;
        $barangkeluar->save();
        return redirect()->route('laporankeluar.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanKeluar  $laporanKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanKeluar $laporanKeluar)
    {
        return redirect()->route('barangkeluar.index');

    }
}

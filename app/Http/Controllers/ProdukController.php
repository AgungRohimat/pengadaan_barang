<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
        //Ubah ke Json

        // return response()->json([
        //     'success' => true,
        //     'message' => 'list Data Produk',
        //     'data' => $produk
        // ], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'merekhp' => 'required',
        //     'jenishp' => 'required',
        //     'stok' => 'required|numeric'
        // ])

    //     $rules = [
    //         'name' => 'required|max:255|unique:produk',
    //         'stok' => 'required|numeric|max:2048'
    //     ];
    //     $messsage = [
    //         'name.required' => 'name harus di isi',
    //         'name.unique' => 'name sudah digunakan',
    //         'name.max' => 'name maksimal 255 karakter',
    //         'namafieldlain.numeric' => 'hanya boleh di isi oleh angka',
    //         'namafieldlain.required' => 'nama field lain harus di isi',
    //         'namafieldlain.required' => 'nama field lain maksimal 2mb',
    //     ];
    //     $validation = Validator::make($request->all(), $rules, $message);
    // if ($validation->fails()) {
    //     Alert::error('Oops', 'Data yang anda input tidak valid, silahkan di ulang')->autoclose(2000);
    //     return back()->withErrors($validation)->withInput();
    // }

        $produk = new Produk;
        // $produk->tanggal = $request->tanggal;
        $produk->merekhp = $request->merekhp;
        $produk->jenishp = $request->jenishp;
        $produk->stok = $request->stok;

        $produk->save();
        return redirect()->route('produk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // $produk = Produk::findOrFail($id);
        // $produk->tanggal = $request->tanggal;
        // $produk->merekhp = $request->merekhp;
        // $produk->jenishp = $request->jenishp;
        // $produk->stok = $request->stok;
        // $produk->save();
        // return redirect()->route('produk.index');

    //     $rules = [
    //         'name' => 'required|max:255|unique:produk',
    //         'stok' => 'required|numeric|max:2048'
    //     ];
    //     $messsage = [
    //         'name.required' => 'name harus di isi',
    //         'name.unique' => 'name sudah digunakan',
    //         'name.max' => 'name maksimal 255 karakter',
    //         'namafieldlain.numeric' => 'hanya boleh di isi oleh angka',
    //         'namafieldlain.required' => 'nama field lain harus di isi',
    //         'namafieldlain.required' => 'nama field lain maksimal 2mb',
    //     ];
    //     $validation = Validator::make($request->all(), $rules, $message);
    // if ($validation->fails()) {
    //     Alert::error('Oops', 'Data yang anda input tidak valid, silahkan di ulang')->autoclose(2000);
    //     return back()->withErrors($validation)->withInput();
    // }

        $produk = Produk::findOrFail($id);
        $produk->merekhp = $request->merekhp;
        $produk->jenishp = $request->jenishp;
        $produk->stok = $request->stok;
        $produk->save();
        return redirect()->route('produk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // if (!Produk::destroy($id)) {
        //     return redirect()->back();
        // }
        // Alert::success('Success', 'Data delected successfully');

        // $produk = Produk::findOrFail($id);
        // $produk->delete();
        // return redirect()->route('produk.index');

        if (!Produk::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Success', 'Data deleted successfully');
        return redirect()->route('produk.index');
    }
}

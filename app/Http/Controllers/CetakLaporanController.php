<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\CetakLaporan;
use Illuminate\Http\Request;

class CetakLaporanController extends Controller
{
    public function laporankeluar()
    {
        return view('laporan.laporankeluar');
    }

    public function cetaklaporanKeluar(Request $request)
    {
        $start = $request->tanggalawal;
        $end = $request->tanggalakhir;

        if ($start < $end) {
            if ($request->pilih == "barangmasuk") {
                $laporan = BarangMasuk::whereBetween('tanggal', [$start, $end])->get();

                return view('laporan.cetakbarangmasuk', compact('laporan'));
            } else if ($request->pilih == 'barangkeluar') {
                $laporan = BarangKeluar::whereBetween('tanggal',[$start, $end])->get();
                return view('laporan.cetakbarangkeluar', compact('laporan'));
            }
        }else {
                return redirect()->back()->with('gagal', 'Tanggal Salah');
      }
    }


}


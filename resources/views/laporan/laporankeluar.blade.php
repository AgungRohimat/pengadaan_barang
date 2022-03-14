
@extends('adminlte::page')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Penulis</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (Session::has('gagal'))
                        {{ Session::get('gagal') }}
                    @endif
                    <div class="card-header bg-info text-light">Cetak Laporan</div>
                    <div class="card-body">
                        <form action="{{ route('laporanKeluar') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Tanggal Awal</label>
                                <input type="date" name="tanggalawal"
                                    class="form-control @error('tanggalawal') is-invalid @enderror">
                                @error('tanggalawal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Akhir</label>
                                <input type="date" name="tanggalakhir"
                                    class="form-control @error('tanggalakhir') is-invalid @enderror">
                                @error('tanggalakhir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror
                            </div>
                            <div class="form-group">

                            <select name="pilih" class="form-control">
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="barangmasuk">Barang Masuk</option>
                                <option value="barangkeluar">Barang Keluar</option>

                            </select>
                            </div>

                            <div class="form-group">
                                <button type="reset" class="btn btn-danger text-light"><i class="fas fa-undo-alt">  Reset</i></button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save">   Simpan</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @isset($barangmasuk)
        {{ $barangmasuk }}

    @endisset
@endsection

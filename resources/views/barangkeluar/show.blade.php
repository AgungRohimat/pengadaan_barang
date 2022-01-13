@extends('adminlte::page')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Barang Masuk</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Barang Keluar</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Merk Hp</label>
                        <input type="text" name="" value="{{$barangkeluar->produk->merekhp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Hp</label>
                        <input type="text" name="" class="form-control" value="{{$barangkeluar->produk->jenishp}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Keluar</label>
                        <input type="text" name="tanggal" class="form-control" value="{{$barangkeluar->tanggal}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for=""> Jumlah Barang Keluar</label>
                        <input type="number" name="jumlahkeluar" value="{{$barangkeluar->jumlahkeluar}}" class="form-control" readonly>

                    </div>

                    <div class="form-group">
                        <a href="{{url('admin/barangkeluar')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


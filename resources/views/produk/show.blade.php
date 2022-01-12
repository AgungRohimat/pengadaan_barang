@extends('adminlte::page')

{{-- @section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Buku</h1>
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
                <div class="card-header">Data Produk</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Merk Hp</label>
                        <input type="text" name="merekhp" value="{{$produk->merekhp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Hp</label>
                        <input type="text" name="id_produk" class="form-control" value="{{$produk->produk->jenishp}}" readonly>
                    </div>

                    <div class="form-group">
                        <a href="{{url('admin/produk')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Produk</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Merek Hp</label>
                        <input type="text" name="merekhp" value="{{$produk->merekhp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Hp</label>
                        <input type="text" name="jenishp" class="form-control" value="{{$produk->jenishp}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Stok</label>
                        <input type="number" name="stok" value="{{$produk->stok}}" class="form-control" readonly>

                    </div>

                    <div class="form-group">
                        <a href="{{url('admin/produk')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

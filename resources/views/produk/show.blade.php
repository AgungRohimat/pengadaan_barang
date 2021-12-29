@extends('adminlte::page')

@section('header')
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
                <div class="card-header">Data Buku</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Judul Buku</label>
                        <input type="text" name="title" value="{{$barangmasuk->title}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Penulis Buku</label>
                        <input type="text" name="" class="form-control" value="{{$barangmasuk->produk->name}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah Buku</label>
                        <input type="number" name="amount" value="{{$barangmasuk->amount}}" class="form-control" readonly>

                    </div>
                    <div class="form-group">
                        <label for=""> Cover Buku</label>
                        <br>
                        <img src="{{ $barangmasuk->image() }}" style="width:350px; height:350px; padding:10px;" />
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/barangmasuks')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

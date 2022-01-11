@extends('adminlte::page')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Barang Masuk</h1>
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
                <div class="card-header">Data Barang Masuk</div>
                <div class="card-body">
                    <form action="{{route('barangmasuk.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Merek Hp</label>
                            <select name="id_produk" class="form-control @error('id') is-invalid @enderror" >
                                @foreach($produk as $data)
                                    <option value="{{$data->id}}">{{$data->merekhp}}</option>
                                @endforeach
                            </select>
                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Hp</label>
                            <select name="id_produk" class="form-control @error('id') is-invalid @enderror" >
                                @foreach($produk as $data)
                                    <option value="{{$data->id}}">{{$data->jenishp}}</option>
                                @endforeach
                            </select>
                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Masuk</label>
                            <input type="date" name="tanggal" class="form-control @error('amount') is-invalid @enderror">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Barang Masuk</label>
                            <input type="number" name="jumlahmasuk" class="form-control @error('amount') is-invalid @enderror">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('adminlte::page')
@section('header')
<div class="content-haeder">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Nama Merek</h1>

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
                <div class="card-header">Data Produk
                </div>
                <div class="card-body">
                    <form action="{{route('produk.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Merk Hp</label>
                            <input type="text" name="merekhp" class="form-control @error('amount') is-invalid @enderror">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Hp</label>
                            <input type="text" name="jenishp" class="form-control @error('amount') is-invalid @enderror">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Tanggal Masuk</label>
                            <input type="date" name="tanggal" class="form-control @error('amount') is-invalid @enderror">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="number" class="form-control" name="stok" min= "1">
                            <option value = "1">Hanya bisa menggunakan Angka</option>
                            @if($errors->has('stok'))
                            <span class="invalid-feedback">{{$errors->first('stok')}}</span>

                            @else

                            @endif
                            {{-- <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror"> --}}
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

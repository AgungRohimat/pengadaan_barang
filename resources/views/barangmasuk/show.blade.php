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
                <div class="card-header">Data Buku</div>
                <div class="card-body">
                   <form action="{{route('barangmasuk.update',$barangmasuk->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$barangmasuk->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror"readonly>
                             @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Merek Hp</label>
                            <input type="text" name="" value="{{$barangmasuk->produk->merekhp}}" class="form-control @error('id_produk') is-invalid @enderror"readonly>
                            {{-- <select name="id_produk" class="form-control @error('id_produk') is-invalid @enderror"readonly >
                                @foreach($produk as $data)
                                    <option value="{{$data->id_produk}}" {{$data->id_produk == $barangmasuk->id_produk ? 'selected="selected"' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select> --}}
                            @error('id_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Jenis Hp</label>
                            <input type="text" name="" value="{{$barangmasuk->produk->jenishp}}" class="form-control @error('id_produk') is-invalid @enderror"readonly>
                            {{-- <select name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" readonly>
                                @foreach($produk as $data)
                                    <option value="{{$data->id_produk}}" {{$data->id_produk == $barangmasuk->id_produk ? 'selected="selected"' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select> --}}
                            @error('id_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         <div class="form-group">
                        <label for=""> Jumlah Barang Masuk</label>
                        <input type="number" name="jumlahmasuk" value="{{$barangmasuk->jumlahmasuk}}" class="form-control" readonly>

                    </div>



                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

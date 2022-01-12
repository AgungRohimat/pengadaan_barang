@extends ('adminlte::page')

@section ('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Barang Masuk</h1>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <form action="{{route('barangmasuk.update', $barangmasuk->id)}}" method="post">
                        @csrf
                        @method ('put')
                        <div class="form-group">
                            <label for="">Merk Hp</label>
                            <input type="text" name="merekhp" value="{{$barangmasuk->merekhp}}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}} </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Hp</label>
                            <input type="text" name="jenishp" value="{{$barangmasuk->jenishp}}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}} </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$barangmasuk->tanggal}}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}} </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Barang Masuk</label>
                            <input type="text" name="jumlahmasuk" value="{{$barangmasuk->jumlahmasuk}}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}} </strong>
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
 --}}

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
                            <input type="date" name="tanggal" value="{{$barangmasuk->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror">
                             @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Merek Hp</label>
                            <select name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" >
                                @foreach($produk as $data)
                                    <option value="{{$data->merekhp}}" {{$data->id == $barangmasuk->merekhp ? 'selected="selected"' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error('id_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="">Jenis Hp</label>
                            <select name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" >
                                @foreach($produk as $data)
                                    <option value="{{$data->jenishp}}" {{$data->jenishp == $barangmasuk->id_produk ? 'selected="selected"' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error('id_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Masuk</label>
                            <input type="number" name="jumlahmasuk" value="{{$barangmasuk->jumlahmasuk}}" class="form-control @error('jumlahmasuk') is-invalid @enderror">
                             @error('jumlahmasuk')
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

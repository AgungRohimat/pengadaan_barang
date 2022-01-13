@extends ('adminlte::page')

@section ('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Barang Keluar</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <form action="{{route('barangkeluar.update', $barangkeluar->id)}}" method="post">
                        @csrf
                        @method ('put')
                        {{-- <div class="form-group">
                            <label for="">Merek Hp</label>
                            <select name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" >
                                @foreach($produk as $data)
                                    <option value="{{$data->merekhp}}"{{$data->id == $barangkeluar->merekhp ? 'selected="selected"' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error('id_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <label for="">Merek Hp</label>
                            <select name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" >
                                @foreach($produk as $data)
                                    <option value="{{$data->id}}">{{$data->merekhp}}</option>
                                @endforeach
                            </select>
                            @error('id_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                       {{-- <div class="form-group">
                            <label for="">Jenis Hp</label>
                            <select name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" >
                                @foreach($produk as $data)
                                    <option value="{{$data->merekhp}}" {{$data->id == $barangkeluar->jenishp ? 'selected="selected"' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error('id_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <label for="">Jenis Hp</label>
                            <select name="id_produk" class="form-control @error('id_produk') is-invalid @enderror" >
                                @foreach($produk as $data)
                                    <option value="{{$data->id}}">{{$data->jenishp}}</option>
                                @endforeach
                            </select>
                            @error('id_produk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$barangkeluar->tanggal}}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}} </strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Barang Keluar</label>
                            <input type="text" name="jumlahkeluar" value="{{$barangkeluar->jumlahkeluar}}" class="form-control @error('name') is-invalid @enderror">
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


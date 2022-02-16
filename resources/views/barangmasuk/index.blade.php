
@extends('adminlte::page')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0"></h1>
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
                <div class="card-header">
                    Data Barang Masuk
                    <a href="{{route('barangmasuk.create')}}" class="btn btn-outline-primary float-right">Tambah Barang</a>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                 <th>Tanggal</th>
                                 <th>Merek Hp</th>
                                <th>Jenis Hp</th>

                                <th>Jumlah Masuk</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($barangmasuk as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>{{$data->produk->merekhp}}</td>
                                 <td>{{$data->produk->jenishp}}</td>

                                 <td>{{$data->jumlahmasuk}}</td>


                                <td>
                                    <form action="{{route('barangmasuk.destroy' , $data->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        {{-- <a href="{{route('barangmasuk.edit', $data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('barangmasuk.show' ,$data->id)}}" class="btn btn-outline-warning">Show</a> --}}
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



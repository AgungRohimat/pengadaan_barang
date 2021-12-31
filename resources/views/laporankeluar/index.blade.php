@extends('adminlte::page')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Laporan Barang Keluar</h1>
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
                    Laporan Barang Keluar
                    {{-- <a href="{{route('barangmasuk.create')}}" class="btn btn-outline-primary float-right">Tambah Barang</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>

                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Merk Hp</th>
                                <th>Jenis Hp</th>
                                <th>Jumlah Keluar</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($laporankeluar as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>{{$data->merekhp}}</td>
                                <td>{{$data->jenishp}}</td>
                                <td>{{$data->jumlahkeluar}}</td>


                                <td>
                                    <form action="{{route('barangkeluar.destroy' , $data->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('barangkeluar.edit', $data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('barangkeluarshow' ,$data->id)}}" class="btn btn-outline-warning">Show</a>
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


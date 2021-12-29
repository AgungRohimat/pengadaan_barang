{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@stop

@section('content')

Halaman Produk

@stop

@section('css')

@stop

@section('js')

@stop
 --}}

@extends('adminlte::page')


@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Produk</h1>
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
                    Produk
                    <a href="{{route('produk.create')}}" class="btn btn-outline-primary float-right">Tambah Produk</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Merek Hp</th>
                                <th>Jenis Hp</th>
                                <th>stok</th>
                                <th>Aksi</th>
                            </tr>
                             @php
                             $no = 1;
                             @endphp
                             @foreach ($produk as $data)

                            <tr>
                                <td>{{$no++}}</td>

                                <td>{{ $data->merekhp }}</td>

                                <td>
                                    <form action="" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="" class="btn btn-outline-info">Edit</a>
                                        <a href="" class="btn btn-outline-warning">Show</a>
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

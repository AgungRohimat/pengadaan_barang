

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
                    <button onclick="window.print()" class="btn btn-primary float-right col-sm-2 ml-3"><span
                        class="fa fa-print">&nbsp;</span> Print</button>
                    <a href="{{route('produk.create')}}" class="btn btn-outline-primary float-right">Tambah Produk</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>

                                <th>Merk HP</th>
                                <th>Jenis Hp</th>
                                <th>Stok</th>
                                <th>Aksi</th>

                            </tr>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($produk as $data)
                            <tr>
                                <td>{{$no++}}</td>

                                <td>{{$data->merekhp}}</td>
                                 <td>{{$data->jenishp}}</td>
                                 <td>{{$data->stok}}</td>

                                <td>
                                    <form action="{{route('produk.destroy' , $data->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('produk.edit', $data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('produk.show' ,$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        {{-- <button type="submit" class="btn btn-outline-danger" onclick="return confirm('apakah anda yakin menghapus ini?');">Delete</button> --}}
                                   <button type="submit" class="btn btn-danger delete-confirm"  >Delete</button>
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

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(".delete-confirm").click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
@endsection

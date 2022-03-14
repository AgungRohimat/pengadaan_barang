<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        table.static {
            position: relative;
            border: 1 px solid #545454;
        }

    </style>
    <title>Document</title>
</head>

<body>

        <div class="form-group">
            <p align="center"> <b>Laporan Barang </b></p>
            <table class="static" align="center" rules="alt" border="1px" style="width : 95%">

                <tr>
                    <th>Nomor</th>

                    <th>Merek Hp</th>
                    <th>Jenis Hp</th>
                    <th>Tanggal Keluar</th>
                    <th>Jumlah Barang Keluar</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($laporan as $data)
                        <tr>
                            <td>{{ $no++ }}</td>

                            <td>{{ $data->produk->merekhp }}</td>
                            <td>{{ $data->produk->jenishp }}</td>
                            <td>{{ $data->tanggal }}</td>
                             <td>{{$data->jumlahkeluar}}</td>



                    @endforeach
            </table>
        </div>
        <script type="text/javascript">
            window.print();
            $
        </script>


</body>

</html>

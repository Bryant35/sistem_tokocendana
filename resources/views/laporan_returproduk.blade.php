<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laporan Retur Produk - Cendana Snack</title>
        <link rel="stylesheet" href="css/laporan.css">
</head>
@include('navbar')
<body>
    <div class="container">
        <div class="row" style="margin-right:0.25rem; margin-top:15px;">
            <h1>RETUR PRODUK</h1>
        </div>
        <div class="rectangle">
            <table class="table table-striped table-hover border rounded">
                <thead>
                    <tr>
                        <th>ID RETUR</td>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jumlah Produk Retur</th>
                        <th scope="col">Jumlah Pengembalian</th>
                        <tbody>
                            @foreach($retur as $kon)
                                <tr>
                                    <th>{{$kon->RETUR_ID}}</th>
                                    <td>{{$kon->NAMA_PRODUK}}</td>
                                    <td>{{$kon->TGL_RETUR}}</td>
                                    <td>{{$kon->JML_PRODUK}}</td>
                                    <td>{{$kon->TOTAL_RETUR}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laporan Konversi Stok - Cendana Snack</title>
        <link rel="stylesheet" href="css/laporan.css">
</head>
@include('navbar')
<body>
    <div class="container">
        <div class="row" style="margin-right:0.25rem; margin-top:15px">
            <h1>KONVERSI STOK</h1>
        </div>
        <div class="rectangle">
            <table class="table table-striped table-hover border rounded">
                <thead>
                    <tr>
                        <th>ID Konversi</td>
                        <th scope="col">Pegawai</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Jumlah Produk Mentah</th>
                        <th scope="col">Jumlah Produk Jadi</th>
                        <th scope="col">Tanggal</th>
                        <tbody>
                            @foreach($konversi as $kon)
                                <tr>
                                    <th>{{$kon->KONVERSI_ID}}</th>
                                    <td>{{$kon->NAMA_PEGAWAI}}</td>
                                    <td>{{$kon->NAMA_PRDKJADI}}</td>
                                    <td>{{$kon->JML_PRDKMENTAH}}</td>
                                    <td>{{$kon->JML_PRDKJADI}}</td>
                                    <td>{{$kon->TGL_KONVERSI}}</td>
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

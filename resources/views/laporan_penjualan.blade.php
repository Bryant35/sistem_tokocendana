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
            <h1>PENJUALAN STOK</h1>
        </div>
        <div class="rectangle">
            <table class="table table-striped table-hover border rounded">
                <thead>
                    <tr>
                        <th>ID JUAL</td>
                        <th scope="col">NAMA CUSTOMER</th>
                        <th scope="col">TANGGAL TRANSAKSI</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">TOTAL PENJUALAN</th>
                        <tbody>
                            @foreach($penjualan as $kon)
                                <tr>
                                    <th>{{$kon->JUAL_ID}}</th>
                                    <td>{{$kon->NAMA_CUST}}</td>
                                    <td>{{$kon->TGL_BELI}}</td>
                                    <td>{{$kon->JML_PRODUK}}</td>
                                    <td>{{$kon->TOTAL_JUAL}}</td>
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

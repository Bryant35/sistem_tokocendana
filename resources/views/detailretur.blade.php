<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Retur - Toko Cendana</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Detail Transaksi Penjualan / {{$detail_retur[0]->RETUR_ID}}</h1>
        <div class="col">
            <div class="card">
                <div class="card-body" style="min-height: 500px; background-color: #EBEBEB;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID Produk</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">QTY Jual</th>
                                <th scope="col">Harga Retur</th>
                                <th scope="col">Total Harga Retur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_retur as $detailretur)
                                <tr>
                                    <th scope="row">{{$detailretur->PRODUK_ID}}</th>
                                    <td>{{$detailretur->NAMA_PRODUK}}</td>
                                    <td>{{$detailretur->QTY_RETUR}}</td>
                                    <td>{{$detailretur->HARGA_RETUR}}</td>
                                    <td>{{$detailretur->HARGA_TOTAL}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="row position-absolute bottom-0 start-0 ms-3 mb-3">
                        <div class="col">
                            <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;"><a href="/retur" style="text-decoration: none; color: black;">Back</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

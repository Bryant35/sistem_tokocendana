<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penyesuaian Stok - Cendana Snack</title>
    <link rel="stylesheet" href="{{ asset('css/sesuaistok.css') }}">
    <style>
        .table {
            position: sticky;
            top: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Penyesuaian Stok</h1>
        <hr>
        <div class="row mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Detail</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Produk ID</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Jumlah Produk</th>
                                    <th scope="col">Tanggal Expired</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_penyesuaian_stok as $produks)
                                <tr>
                                    <th scope="row">{{$produks->PRODUK_ID}}</th>
                                    <td>{{$produks->NAMA_PRODUK}}</td>
                                    <td>{{$produks->QUANTITY_PRODUK}}</td>
                                    <td>{{$produks->EXPIRED_PRODUK}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" style="height: 180px; background-color: #EBEBEB;">
                        <div class="" style="margin-top: -40%;">
                            <a href="/updatepenyesuaistok" style="text-decoration: none; color: black;"><button type="button" class="block">Update</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

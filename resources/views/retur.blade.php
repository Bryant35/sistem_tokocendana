<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retur - Cendana Snack</title>
    <link rel="stylesheet" href="{{ asset('css/retur.css') }}">
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Retur Produk</h1>
        <hr>
        <div class="row">
            <div class="col" style="margin-bottom: 15px;">
                <div class="card">
                    <div class="card-body" style="background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Detail</h5>
                        <table class="table table-striped table-hover border rounded">
                            <thead>
                                <tr>
                                    <th scope="col">ID Retur</th>
                                    <th scope="col">ID Jual</td>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Jumlah Produk</th>
                                    <th scope="col">Total Retur</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_retur as $listretur)
                                    <tr>
                                        <th scope="row">{{$listretur->RETUR_ID}}</th>
                                        <td>{{$listretur->JUAL_ID}}</td>
                                        <td>{{$listretur->NAMA_PRODUK}}</td>
                                        <td>{{$listretur->JML_PRODUK}}</td>
                                        <td>{{$listretur->TOTAL_RETUR}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <button type="button" class="block">Insert</button>
                        <button type="button" class="block">Update</button>
                        <button type="button" class="block">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

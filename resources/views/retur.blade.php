<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retur - Cendana Snack</title>
    <link rel="stylesheet" href="{{ asset('css/retur.css') }}">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/ins-up-del.css">
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Retur Produk</h1>
        <hr>
        <div class="row">
            <div class="col-8" style="margin-bottom: 15px;">
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
                                        <form action="/detailretur" method="POST">
                                            @csrf
                                            <input type="hidden" name="idretur" id="updateitem" value="{{$listretur->RETUR_ID}}">
                                            <td><input type="submit" value="View"></td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body" style="height: 180px; background-color: #EBEBEB;">
                        <a href="/insertcustomerretur" style="text-decoration: none; color: black;"><button type="button" class="block">Insert</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

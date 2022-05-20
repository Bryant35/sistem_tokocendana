<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konversi - Toko Cendana</title>
    <link rel="stylesheet" href="{{ asset('css/konversi.css') }}">
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Konversi Stok</h1>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Produk Mentah</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body" style="height: 420px; background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Ketentuan</h5>
                    </div>
                </div>
                <button type="button" class="block">Konversi</button>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Produk Jadi</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

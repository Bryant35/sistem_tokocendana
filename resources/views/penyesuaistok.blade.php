<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penyesuaian Stok - Cendana Snack</title>
    <link rel="stylesheet" href="{{ asset('css/sesuaistok.css') }}">
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Penyesuaian Stok</h1>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Detail</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <button type="button" class="block">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

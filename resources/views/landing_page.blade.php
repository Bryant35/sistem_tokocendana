<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo_toko_cendana.png" type="image/x-icon">
    <title>Home Page - Toko Cendana</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-4" style="width: 450px;">
                <div class="card">
                    <div class="card-body" style="height: 275px;">
                        <h5 class="card-title fw-bold">Total Pegawai</h5>
                        <p class="card-text position-static align-middle text-center" style="font-size: 30px; margin-top:20%">{{$count_pegawai[0]->count_pegawai}}</p>
                        <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-3 me-3">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="width: 450px;">
                <div class="card">
                    <div class="card-body" style="height: 275px;">
                        <h5 class="card-title fw-bold">Pemasukan Bulan ini</h5>
                        <p class="card-text position-static align-middle text-center" style="font-size: 30px; margin-top:20%">Rp. {{$count_penjualan[0]->count_penjualan}}</p>
                        <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-3 me-3">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="width: 400px;">
                <div class="card">
                    <div class="card-body" style=" height: 575px;">
                        <h5 class="card-title fw-bold">Jumlah Barang Terjual</h5>
                        <p class="card-text position-static align-middle text-center" style="font-size: 30px; margin-top:60%;">{{$count_penjualan[0]->count_unit_terjual}} Unit</p>
                        <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-3 me-3">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4" style="width: 900px; margin-top: -275px">
                <div class="card">
                    <div class="card-body" style=" height: 275px;">
                        <h5 class="card-title fw-bold">Jumlah Barang Retur</h5>
                        <p class="card-text position-static align-middle text-center" style="font-size: 30px; margin-top:10%">{{$count_retur[0]->count_retur}} Unit</p>
                        <a href="#" class="btn btn-primary position-absolute bottom-0 end-0 mb-3 me-3">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

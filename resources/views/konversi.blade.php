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
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col col-lg-3""><h5>Input Produk Mentah: </h5></div>
                                <div class="col-8">
                                    <input type="name" name="produkmentah" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search Produk Mentah">
                                    <datalist id="idLIST">
                                    </datalist>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col col-lg-3" for="qtykonversi"><h5>Jumlah yang akan Dikonversi:</h5></label>
                                <div class="col-1">
                                    <input class="form-control dropbtn shadow bg-body" type="number" id="qtykonversi" name="qtykonversi">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col col-lg-3""><h5>Akan Menjadi Produk: </h5></div>
                                <div class="col-8">
                                    <input type="name" name="produkjadi" style="background-color: #F4F9FF;" list="idLIST2" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search Produk Jadi">
                                    <datalist id="idLIST2">
                                    </datalist>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col col-lg-3" for="qtyhasilkonversi"><h5>Jumlah Hasil Dikonversi:</h5></label>
                                <div class="col-1">
                                    <input class="form-control dropbtn shadow bg-body" type="number" id="qtyhasilkonversi" name="qtyhasilkonversi">
                                </div>
                            </div>
                            <br>
                            <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                                <div class="col">
                                    <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Save">
                                </div>
                                <div class="col">
                                    <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

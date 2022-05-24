<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Produk Mentah - Cendana Snack</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Delete Produk Jadi</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height:550px; background-color: #EBEBEB;">
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>ID Produk: </h5></div>
                                <div class="col-4 ">
                                    <input type="name" name="id_pjadi" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search ID Produk">
                                    <datalist id="idLIST">
                                        <option value="PAM001">
                                        <option value="PAJ001">
                                        <option value="Alexa Wong">
                                        <option value="Andini Triapsari">
                                        <option value="Denisa">
                                    </datalist>
                                </div>
                            </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Nama Produk: </h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Jenis Produk: </h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Harga Produk: </h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Jumlah Produk: </h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Status Produk: </h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Expired Produk: </h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Tanggal Terima: </h5></div>
                        </div>
                        <br>
                        <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                            </div>
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;">Delete</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

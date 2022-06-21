<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Produk Mentah - Cendana Snack</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <div class="d-flex justify-content-between mb-3 mt-2">
            <h1 class="fw-bold">Update Produk Jadi</h1>
            <button type="button" class="btn border-end border-bottom border-3 rounded fw-bold mt-2 shadow bg-body" style="background-color:green; color: red;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
            </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="/deletejadi" method="POST">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Produk Jadi ?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Yakin Menghapus Produk Jadi {{$detail_produkjadi[0]->NAMA_PRODUK}} ?
                            <input type="hidden" name="idjadi_delete" value="{{$detail_produkjadi[0]->PRODUK_ID}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <form action="/updateprodukjadi" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="height:550px; background-color: #EBEBEB;">
                            <div class="row">
                                <div class="col-6 col-sm-3"><h5>ID Produk: </h5></div>
                                    <div class="col-4">
                                        <input type="text" style="background-color: #707070;" class="form-control dropbtn shadow bg-body" placeholder="{{$detail_produkjadi[0]->PRODUK_ID}}" disabled>
                                        <input type="hidden" name="id_pjadi" style="background-color: #F4F9FF;" id="pilih_id" class="form-control dropbtn shadow bg-body" value="{{$detail_produkjadi[0]->PRODUK_ID}}">
                                    </div>
                                </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="namaproduk"><h5>Nama Produk:</h5></label>
                                <input class="col-auto" type="text" id="namaproduk" name="namaproduk" value="{{$detail_produkjadi[0]->NAMA_PRODUK}}" required>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="jenis_pjadi"><h5>Jenis Produk:</h5></label>
                                <input class="col-auto" type="text" id="jenis_pjadi" name="jenis_pjadi" value="{{$detail_produkjadi[0]->JENIS_PRODUK}}" required>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="harga_produk"><h5>Harga Produk:</h5></label>
                                <input class="col-auto" type="number" id="harga_produk" name="harga_produk" value="{{$detail_produkjadi[0]->HARGA_PRODUK}}" required>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6 col-sm-3"><h5>Jumlah Produk Mentah: </h5></div>
                                <div class="col-auto" style="margin-left: -20px"><button class="btn" id="minus">−</button></div>
                                <div class="col-auto">
                                    <input type="number" name="jumlah_produk" class="form-control text-center shadow bg-body" style="width: 100px" min="0" value="{{$detail_produkjadi[0]->QUANTITY_PRODUK}}" id="input" required>
                                </div>
                                <div class="col-auto"><button class="btn" id="plus">+</button></div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-6 col-sm-3"><h5>Status Produk: </h5></div>
                                <div class="col-4 ">
                                    <input type="search" name="status_produk" style="background-color: #F4F9FF;" list="idLISTStat" class="form-control dropbtn shadow bg-body" placeholder="Search Status Produk" value="{{$detail_produkjadi[0]->STATUS_PRODUK}}" required>
                                    <datalist id="idLISTStat">
                                        @foreach ($status_produkjadi as $stat)
                                            <option value="{{$stat->STATUS_PRODUK}}">
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="expproduk"><h5>Expired Produk:</h5></label>
                                <input class="col-auto" type="date" id="expproduk" name="expproduk" value="{{$detail_produkjadi[0]->EXPIRED_PRODUK}}">
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="tgl_terima"><h5>Tanggal Terima:</h5></label>
                                <input class="col-auto" type="date" id="tgl_terima" name="tgl_terima" value="{{$detail_produkjadi[0]->TGL_TERIMA}}">
                            </div>
                            <br>
                            <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                                <div class="col">
                                    <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                                </div>
                                <div class="col">
                                    <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Update">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        const minusButton = document.getElementById('minus');
        const plusButton = document.getElementById('plus');
        const inputField = document.getElementById('input');

        minusButton.addEventListener('click', event => {
            event.preventDefault();
            if (inputField.value == "0") {
                document.getElementById("minus").classList.toggle("disabled");
            }
            else{
                const currentValue = Number(inputField.value) || 0;
                inputField.value = currentValue - 1;
            }
        });

        plusButton.addEventListener('click', event => {
            event.preventDefault();
            document.getElementById("minus").classList.remove("disabled");
            const currentValue = Number(inputField.value) || 0;
            inputField.value = currentValue + 1;
        });
    </script>
</body>
</html>

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
            <h1 class="fw-bold">Update Produk Mentah</h1>
            <button type="button" class="btn border-end border-bottom border-3 rounded fw-bold mt-2 shadow bg-body" style="background-color:green; color: red;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
            </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="/deletementah" method="POST">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Produk Mentah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Yakin Menghapus Produk Mentah {{$detail_produkmentah[0]->NAMA_PRODUK}} ?
                            <input type="hidden" name="idmentah_delete" value="{{$detail_produkmentah[0]->MENTAH_ID}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <form action="/runupdatementah" method="POST">
                        @csrf
                        <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                            <div class="row">
                                <label class = "col-6 col-sm-3" for="idmentah"><h5>ID Produk Mentah:</h5></label>
                                <input type="hidden" class="col-auto" id="idmentah" name="idmentah" value="{{$detail_produkmentah[0]->MENTAH_ID}}">
                                <input type="text" class="col-auto" id="idmentah" name="idmentah2" value="{{$detail_produkmentah[0]->MENTAH_ID}}" disabled>
                            </div>
                            <br>
                            <div class="row">
                                <label class = "col-6 col-sm-3" for="idkonversi"><h5>ID Konversi:</h5></label>
                                <input type="text" class="col-auto" id="idkonversi" name="idkonversi" value="{{$detail_produkmentah[0]->KONVERSI_ID}}" disabled>
                            </div>
                            <br>
                            <div class="row">
                                <label class = "col-6 col-sm-3" for="namamentah"><h5>Nama Produk Mentah:</h5></label>
                                <input type="text" class="col-auto" id="namamentah" name="namamentah" value="{{$detail_produkmentah[0]->NAMA_PRODUK}}">
                            </div>
                            <br>
                            <div class="row">
                                    <label class = "col-6 col-sm-3" for="jenismentah"><h5>Jenis Produk Mentah:</h5></label>
                                    <input type="text" class="col-auto" id="jenismentah" name="jenismentah" value="{{$detail_produkmentah[0]->JENIS_PRODUK}}">
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-6 col-sm-3""><h5>Jumlah Produk Mentah: </h5></div>
                                <div class="col-auto"><button class="btn" id="minus">−</button></div>
                                <div class="col-auto">
                                <input type="number" name="jumlah" class="form-control text-center shadow bg-body" style="width: 100px" min="0" value="{{$detail_produkmentah[0]->JML_PRODUK}}" id="input"/>
                                </div>
                                <div class="col-auto"><button class="btn" id="plus">+</button></div>
                            </div>
                            <br>
                            <div class="row">
                                <label class = "col-6 col-sm-3" for="expproduk"><h5>Expired Produk:</h5></label>
                                <input type="date" class="col-auto" id="expproduk" name="expproduk" value="{{$detail_produkmentah[0]->EXPIRED_PRODUK}}">
                            </div>
                            <br>
                            <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                                <div class="col">
                                    <a href="/produkmentah" onclick=""><div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div></a>
                                </div>
                                <div class="col">
                                    <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Update">
                                    {{-- <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;">Update</div> --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Produk Mentah - Cendana Snack</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Insert Produk Jadi</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height:550px; background-color: #EBEBEB;">
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>ID Produk: </h5></div>

                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="namapjadi"><h5>Nama Produk:</h5></label>
                                <input class="col-auto" type="text" id="namapjadi" name="namapjadi">
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="jenis_pmentah"><h5>Jenis Produk Mentah:</h5></label>
                                <input class="col-auto" type="text" id="jenis_pmentah" name="jenis_pmentah">
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="harga_produk"><h5>Harga Produk:</h5></label>
                                <input class="col-auto" type="text" id="harga_produk" name="harga_produk">
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Jumlah Produk: </h5></div>
                            <div class="col-auto" style="margin-left: -20px"><button class="btn" id="minus">−</button></div>
                            <div class="col-auto">
                                <input type="number" class="form-control text-center shadow bg-body" style="width: 100px" min="0" value="0" id="input"/>
                            </div>
                            <div class="col-auto"><button class="btn" id="plus">+</button></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>Status Produk: </h5></div>
                                <div class="col-8">
                                    <input type="name" name="status_produk" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search status produk">
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
                            <form action="">
                                <label class="col-6 col-sm-3" for="expproduk"><h5>Expired Produk:</h5></label>
                                <input type="datetime-local" id="expproduk" name="expproduk">
                              </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="tgl_terima"><h5>Tanggal Terima Produk:</h5></label>
                                <input type="datetime-local" id="tgl_terima" name="tgl_terima">
                              </form>
                        </div>
                        <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                            </div>
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;">Insert</div>
                            </div>
                        </div>
                    </div>
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

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
        <h1 class="fw-bold">Update Produk Mentah</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <div class="row">
                        <div class="col-6 col-sm-3"><h5>ID Produk Mentah: </h5></div>
                            <div class="col-8">
                                <input type="name" name="id_produk_mentah" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search ID Retur">
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
                            <div class="col-6 col-sm-3"><h5>ID Konversi: </h5></div>

                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class = "col-6 col-sm-3" for="namamentah"><h5>Nama Produk Mentah:</h5></label>
                                <input type="text" id="namamentah" name="namamentah">
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class = "col-6 col-sm-3" for="jenismentah"><h5>Jenis Produk Mentah:</h5></label>
                                <input type="text" id="jenismentah" name="jenismentah">
                            </form>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3""><h5>Jumlah Produk Mentah: </h5></div>
                            <div class="col-auto"><button class="btn" id="minus">−</button></div>
                            <div class="col-auto">
                            <input type="number" class="form-control text-center shadow bg-body" style="width: 100px" min="0" value="0" id="input"/>
                            </div>
                            <div class="col-auto"><button class="btn" id="plus">+</button></div>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class = "col-6 col-sm-3" for="expproduk"><h5>Expired Produk:</h5></label>
                                <input type="datetime-local" id="expproduk" name="expproduk">
                              </form>
                        </div>
                        <br>
                        <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                            </div>
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;">Update</div>
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
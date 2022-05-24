<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Customer - Cendana Snack</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Update Customer</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height:500px; background-color: #EBEBEB;">
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>ID Customer: </h5></div>
                            <div class="col-3">
                                <input type="name" name="id_customer" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search ID Customer">
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
                                <label class="col-6 col-sm-3" for="namacustomer"><h5>Nama Customer:</h5></label>
                                <input class="col-auto" type="text" id="namacustomer" name="namacustomer">
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="status_customer"><h5>Status Customer:</h5></label>
                                <input class="col-auto" type="text" id="status_customer" name="status_customer">
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <div class="col-auto">
                                <label class="col-6 col-sm-3" for="alamat_customer"><h5>Alamat Customer:</h5></label>
                                <input style="width:60%; padding-bottom:60px;" type="text" id="alamat_customer" name="alamat_customer">
                                </div>
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="telepon_customer"><h5>Telepon Customer:</h5></label>
                                <input class="col-auto" type="text" id="telepon_customer" name="telepon_customer">
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

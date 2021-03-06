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
        <h1 class="fw-bold">Insert Customer</h1>
        <div class="row">
            <form action="/insert-customer" method="POST">
                @csrf
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="height:500px; background-color: #EBEBEB;">
                            <div class="row">
                                <label class="col-6 col-sm-3" for="namacustomer"><h5>Nama Customer:</h5></label>
                                <div class="col-3">
                                    <input class="form-control" type="text" id="namacustomer" name="namacustomer">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="status_customer"><h5>Status Customer:</h5></label>
                                <div class="col-3">
                                    <input class="form-control" type="text" id="status_customer" name="status_customer">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="alamat_customer"><h5>Alamat Customer:</h5></label>
                                <div class="col-8">
                                    <input class="form-control" style="width:100%; padding-bottom:60px;" type="text" id="alamat_customer" name="alamat_customer">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="telepon_customer"><h5>Telepon Customer:</h5></label>
                                <div class="col-3">
                                    <input class="form-control" type="number" id="telepon_customer" name="telepon_customer">
                                </div>
                            </div>
                            <br>
                            <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                                <div class="col">
                                    <a href="/customer"><div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div></a>
                                </div>
                                <div class="col">
                                    <input class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Insert" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

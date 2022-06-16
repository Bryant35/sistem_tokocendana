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
        <div class="d-flex justify-content-between">
            <h1 class="fw-bold">Update Customer </h1>
            <button type="button" class="btn border-end border-bottom border-3 rounded fw-bold mt-2 shadow bg-body" style="background-color:green; color: red;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
            </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="/deletecust" method="POST">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Yakin Menghapus Customer ?
                            <input type="hidden" name="id_customer_delete" value="{{$data_customer[0]->CUST_ID}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
            </form>
          </div>

        <form action="/update-customer" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="height:500px; background-color: #EBEBEB;">
                            <div class="row">
                                <div class="col-6 col-sm-3"><h5>ID Customer: </h5></div>
                                <div class="col-3">
                                    <input type="hidden" name="id_customer" style="background-color: #F4F9FF;" class="form-control" value="{{$data_customer[0]->CUST_ID}}">
                                    <input type="text" style="background-color: #4d4d4d; color:#4d4d4d" class="form-control dropbtn shadow bg-body" value="{{$data_customer[0]->CUST_ID}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="namacustomer"><h5>Nama Customer:</h5></label>
                                <div class="col-3">
                                    <input class="form-control" type="text" name="namacustomer" value="{{$data_customer[0]->NAMA_CUST}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="status_customer"><h5>Status Customer:</h5></label>
                                <div class="col-3">
                                    <input class="form-control" type="text" name="status_customer" value="{{$data_customer[0]->STATUS_CUST}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="alamat_customer"><h5>Alamat Customer:</h5></label>
                                <div class="col-8">
                                    <input class="form-control" style="padding-bottom:60px;" type="text" id="alamat_customer" name="alamat_customer" value="{{$data_customer[0]->ALAMAT_CUST}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="telepon_customer"><h5>Telepon Customer:</h5></label>
                                <div class="col-3">
                                    <input class="form-control" type="number" name="telepon_customer" value="{{$data_customer[0]->TELP_CUST}}">
                                </div>
                            </div>
                            <br>
                            <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                                <div class="col">
                                    <a href="/customer" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</a>
                                </div>
                                <div class="col">
                                    <input class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Update" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

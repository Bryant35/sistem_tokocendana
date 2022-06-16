<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Transaksi Penjualan - Cendana Snack</title>
    <link rel="stylesheet" href="css/btn-hover.css">

    <style>
        .scroll {
            overflow-y: hidden; /* Hide scrollbars */
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Insert Transaksi Penjualan / {{ session()->get('nama_cust') }}</h1>
        <div class="col">
            <div class="card">
                <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                    <form action="/insert_mirror" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-sm-2"><h5>Nama Produk : </h5></div>
                        <div class="col-6">
                            <input type="name" name="id_produk" style="background-color: #F4F9FF;margin-top: -5px;" list="idLIST" id="pilih_id" class="form-control scroll dropbtn shadow bg-body" placeholder="Search Produk">
                            <datalist class="scroll" id="idLIST" style="height:150px; overflow-y:auto;">
                            @foreach($data_newid as $produks)
                                <option value="{{$produks->PRODUK_ID}} - {{$produks->NAMA_PRODUK}}">
                            @endforeach
                            </datalist>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2 mt-1"><h5>Quantity : </h5></div>
                            <div class="col-2">
                                <input type="number" name="qty" class="form-control scroll dropbtn shadow bg-body" value="" style="margin-left:4px;" placeholder="Quantity">
                            </div>
                            <div class="btn-group col-3" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-primary" id="minus">-</button>
                                {{-- <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"> --}}
                                <input type="number" name="diskon" class="text-center" style="width: 100px" min="0" value="0" id="input"/>
                                <button type="button" class="btn btn-outline-primary" id="plus">+</button>
                            </div>
                            <div class="col-2">
                                <input type="submit" class="btn btn-primary btn shadow" style="width: 95px" id="btn_add" value="+ Add">
                            </div>
                            @if (session()->has('duplicate'))
                                <div class="col-2" style="margin-top: -20px;">
                                    <div class="alert alert-danger align-middle text-end " role="alert">
                                    {{ session()->get('duplicate') }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </form>
                    <br>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID Produk</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Harga Produk</th>
                                <th scope="col">Diskon Produk</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data_table == null)

                            @else
                                @foreach($data_table as $listjual)
                                <tr>
                                    <th scope="row" class="align-middle">{{$listjual->PRODUK_ID}}</th>
                                    <td class="align-middle">{{$listjual->NAMA_PRODUK}}</td>
                                    <td class="align-middle">{{$listjual->QTY_JUAL}}</td>
                                    <td class="align-middle">{{$listjual->HARGA_JUAL}}</td>
                                    <td class="align-middle">{{$listjual->DISKON_JUAL}}</td>
                                    <td class="align-middle">{{$listjual->HARGA_TOTAL}}</td>
                                    <form action="/delrow" method="POST">
                                        @csrf
                                        <input type="hidden" name="id_produk" value="{{$listjual->PRODUK_ID}}">
                                        <input type="hidden" name="id_jual" value="{{$listjual->JUAL_ID}}">
                                        <td><input type="submit" class="btn link-danger" style="text-decoration: underline;" value="Delete"></td>
                                    </form>
                                </tr>
                                @endforeach
                            @endif
                            {{-- <tr>
                                <th scope="row">TJ0000002</th>
                                <td>TR0000002</td>
                                <td>CHY0001</td>
                                <td>Keciput Bulat 300gr, Keju Stick 200gr</td>
                                <td>6</td>
                                <td>69000</td>
                            </tr>
                            <tr>
                                <th scope="row">TJ0000003</th>
                                <td>TR0000003</td>
                                <td>CRS0001</td>
                                <td>Koro Keju 300gr</td>
                                <td>2</td>
                                <td>28000</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <form action="/deletelistpenjualan" method="GET">
                    @csrf
                    <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;" value="Cancel">
                    {{-- <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div> --}}
                </form>
            </div>
            <div class="col-1" style="display: flex;justify-content: flex-end;">
                <form action="/insertlistpenjualan" method="GET">
                    @csrf
                    <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Insert">
                    {{-- <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;"><span>Insert</span></div> --}}
                </form>
            </div>
        </div>
    </div>
    <script>
        const minusButton = document.getElementById('minus');
        const plusButton = document.getElementById('plus');
        const inputField = document.getElementById('input');

        minusButton.addEventListener('click', event => {
            event.preventDefault();
            if(inputField.value > 0 && inputField.value < 500){
                inputField.value = 0;
            }
            if (inputField.value == "0") {
                document.getElementById("minus").classList.toggle("disabled");
            }
            else{
                const currentValue = Number(inputField.value) || 0;
                inputField.value = currentValue - 500;
            }
        });

        plusButton.addEventListener('click', event => {
            event.preventDefault();
            document.getElementById("minus").classList.remove("disabled");
            const currentValue = Number(inputField.value) || 0;
            inputField.value = currentValue + 1000;
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Customer Retur - Cendana Snack</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Insert Customer Retur</h1>
        <form action="/inserttransaksiretur" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                            <div class="row mt-3 ms-3">
                                <div class="col col-lg-2""><h5>ID Transaksi/Retur: </h5></div>
                                <div class="col-8">
                                    <input type="name" name="id_transaksi" style="background-color: #F4F9FF;" list="idLISTTrans" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search ID Transaksi - Customer">
                                    <datalist id="idLISTTrans">
                                        @foreach ($data_transaksi as $transaksi)
                                            <option value="{{$transaksi->JUAL_ID}} - {{$transaksi->CUST_ID}}">{{$transaksi->NAMA_CUST}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                            <br>
                            <br>
                            {{-- <div class="row">
                                <div class="col col-lg-2""><h5>ID Customer: </h5></div>
                                <div class="col-8">
                                    <input type="name" name="id_customer" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search ID Customer">
                                    <datalist id="idLIST">
                                        @foreach ($data_customer as $cust)
                                            <option value="{{$cust->CUST_ID}} - {{$cust->NAMA_CUST}}"></option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div> --}}
                            <br>
                            <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                                <div class="col">
                                    <a href="/retur" style="text-decoration: none; color: grey;"><div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div></a>
                                </div>
                                <div class="col">
                                    <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Next">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

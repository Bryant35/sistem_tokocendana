<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Customer Beli - Cendana Snack</title>
    <script type="text/javascript" src="jquery-1.3.2.js"> </script>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Insert Keterangan Pembeli</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <form action="" method="GET">
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>ID Transaksi: </h5></div>
                            <div class="col-3"><h5>{{$data_newid[0]->ID_BARU_JUAL}} </h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>ID Retur: </h5></div>
                            <div class="col-3"><h5>{{$data_newid[0]->ID_BARU_RETUR}} </h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>ID Customer - Nama Customer: </h5></div>
                            <div class="col-3">
                                <input type="name" name="id_customer" onclick="getCustName()" style="background-color: #F4F9FF; width: 150%;" list="idLIST" id="pilihid" name="getid" class="form-control dropbtn shadow bg-body" placeholder="Search ID Customer">
                                <datalist id="idLIST">
                                    @foreach($get_custid as $custid)
                                            <option value="{{$custid->CUST_ID}} - {{$custid->NAMA_CUST}}">
                                    @endforeach
                                </datalist>
                            </div>
                        </div>
                        <br>
                        {{-- <div class="row">
                            <div class="col-6 col-sm-3"><h5>Nama Customer: </h5></div>
                            <div class="col-3 disabled"><h5 id="CustName"></h5></div>
                        </div> --}}
                        <br>
                        <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;"><a href="/transaksijual" style="text-decoration: none; color: grey;">Cancel</a></div>
                            </div>
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;"><a href="" style="text-decoration: none;">Next</a></div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getCustName(){
            var id = document.getElementById("pilihid").value;
            document.getElementById("CustName").innerHTML = id;
        }
    </script>
</body>
</html>

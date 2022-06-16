<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer - Cendana Snack</title>
    <link rel="stylesheet" href="css/ins-up-del.css">
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Customer</h1>
        <hr>
        <div class="row">
            <div class="col" style="margin-bottom: 15px;">
                <div class="card">
                    <div class="card-body" style="background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Detail</h5>
                        <table class="table table-striped table-hover border rounded">
                            <thead>
                                <tr>
                                    <th scope="col">ID Customer</th>
                                    <th scope="col">Nama Customer</td>
                                    <th scope="col">Status</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor Telp</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_customer as $listcustomer)
                                    <tr>
                                        <th scope="row">{{$listcustomer->CUST_ID}}</th>
                                        <td>{{$listcustomer->NAMA_CUST}}</td>
                                        <td>{{$listcustomer->STATUS_CUST}}</td>
                                        <td>{{$listcustomer->ALAMAT_CUST}}</td>
                                        <td>{{$listcustomer->TELP_CUST}}</td>
                                        <form action="/detail-customer" method="POST">
                                            @csrf
                                            <input type="hidden" name="idcust" value="{{$listcustomer->CUST_ID}}">
                                            <td><input type="submit" value="Update"></td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" style="height: 180px; background-color: #EBEBEB;">
                        <a href="/insertcustomer" style="text-decoration: none; color: black;"><button type="button" class="block">Insert</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

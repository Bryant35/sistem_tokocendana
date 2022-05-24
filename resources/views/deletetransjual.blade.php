<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Transaksi Penjualan - Cendana Snack</title>
    <style>
        .btn span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .btn span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
        }

        .btn:hover span {
        padding-right: 25px;
        }

        .btn:hover span:after {
        opacity: 1;
        right: 0;
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Delete Transaksi Penjualan</h1>
        <div class="col">
            <div class="card">
                <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID Jual</th>
                                <th scope="col">ID Retur</th>
                                <th scope="col">Cust ID</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Jumlah Produk</th>
                                <th scope="col">Total Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">TJ0000001</th>
                                <td>TR0000001</td>
                                <td>CPS0001</td>
                                <td>Bidaran Keju 200gr</td>
                                <td>3</td>
                                <td>33000</td>
                            </tr>
                            <tr>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
            </div>
            <div class="col-1" style="display: flex;justify-content: flex-end;">
                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;"><span>Delete</span></div>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Penjualan - Toko Cendana</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Transaksi Penjualan</h1>
        <div class="row">
            <div class="col-8">
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
            <div class="col-4">
                <div class="card">
                    <div class="card-body" style=" height: 275px;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <a href="#" class="btn btn-primary d-flex justify-content-center mt-3"><div class="mx-2">Insert</div></a>
                            <a href="#" class="btn btn-primary d-flex justify-content-center mt-3"><div class="mx-2">Update</div></a>
                            <a href="#" class="btn btn-primary d-flex justify-content-center mt-3"><div class="mx-2">Delete</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>

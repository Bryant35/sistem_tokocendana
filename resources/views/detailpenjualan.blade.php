<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Transaksi Penjualan - Cendana Snack</title>
    <link rel="stylesheet" href="css/btn-hover.css">
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Detail Transaksi Penjualan / {{$detail_penjualan[0]->JUAL_ID}}</h1>
        <div class="col">
            <div class="card">
                <div class="card-body" style="min-height: 500px; background-color: #EBEBEB;">
                    <table class="table table-hover">
                        <thead>
                            <h5>"{{$detail_penjualan[0]->Nama_Cust}}"</h5>
                            <tr>
                                <th scope="col">ID Produk</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">QTY Jual</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Diskon Jual</th>
                                <th scope="col">Harga Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_penjualan as $detailjual)
                                <tr>
                                    <th scope="row">{{$detailjual->PRODUK_ID}}</th>
                                    <td>{{$detailjual->NAMA_PRODUK}}</td>
                                    <td class="text-center">{{$detailjual->QTY_JUAL}}</td>
                                    <td>{{$detailjual->HARGA_JUAL}}</td>
                                    <td>{{$detailjual->DISKON_JUAL}}</td>
                                    <td>{{$detailjual->HARGA_TOTAL}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;"><a href="/transaksijual" style="text-decoration: none; color: black;">Back</a></div>
            </div>
            {{-- <div class="col">
                <a href="/transaksijual" style="text-decoration: none; color: black;"><div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: red;">Delete</div></a>
                <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:blue; color: white;" value="Update">
            </div> --}}
        </div>
    </div>
</body>
</html>

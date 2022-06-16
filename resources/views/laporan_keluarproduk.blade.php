<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laporan Stok Keluar - Cendana Snack</title>
        <link rel="stylesheet" href="css/laporan.css">
</head>
@include('navbar')
<body>
    <div class="container">
        <div class="row" style="margin-left: 70px; margin-right:0.25rem; margin-top:15px">
            <h1 style="margin-top: 0.25rem; width:390px">Stok Keluar / <span><a href="/laporanmasukproduk" class="menu-btn">Masuk</a><span></h1>
                {{-- <select id="year" name="year" style="width: 165px; height: 33px; margin-top: 10px;margin-left: 15px;font-size: 20px;">
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
            </select>
            <select id="month" name="month" style="width: 165px; height: 33px; margin-top: 10px;margin-left: 10px;font-size: 20px;">
                <option value="januari">Januari</option>
                <option value="februari">Februari</option>
                <option value="maret">Maret</option>
                <option value="april">April</option>
                <option value="mei">Mei</option>
                <option value="juni">Juni</option>
                <option value="juli">Juli</option>
                <option value="agustus">Agustus</option>
                <option value="september">September</option>
                <option value="oktober">Oktober</option>
                <option value="november">November</option>
                <option value="desember">Desember</option>
            </select> --}}
        </div>
        <div class="rectangle">
            <table class="table table-striped table-hover border rounded">
                <thead>
                    <tr>
                        <th>ID JUAL</td>
                        <th scope="col">NAMA PRODUK</th>
                        <th scope="col">JUMLAH PRODUK</th>
                        <th scope="col">HARGA JUAL</th>
                        <th scope="col">TANGGAL TRANSAKSI</th>
                        <tbody>
                            @foreach($keluar as $kon)
                            <tr>
                                <th>{{$kon->JUAL_ID}}</th>
                                <td>{{$kon->NAMA_PRODUK}}</td>
                                <td>{{$kon->QTY_JUAL}}</td>
                                <td>{{$kon->HARGA_JUAL}}</td>
                                <td>{{$kon->TGL_BELI}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</body>
</html>

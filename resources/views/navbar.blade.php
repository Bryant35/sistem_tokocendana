<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .nav-item{
            color: black;
        }
        .nav-item:hover {
            color: #FF0000;
        }
        .clicked:active{
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="mx-5">
        <nav class="navbar navbar-collapse dark mx-5">
            <a class="nav-link" href="/"><img src="img\logo_toko_cendana.png" alt="" style="width: 60px; text-align: left;"></a>
            <li class="nav-item dropdown fw-bold" style="text-decoration: black; list-style: none;">
                <a class="nav-item text-reset" href="#" id="navbarToko" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: black;">
                Toko
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarToko" style="text-decoration: none;">
                    <li><a class="dropdown-item" href="#">Transaksi Jual</a></li>
                    <li><a class="dropdown-item" href="#">Konversi Stok</a></li>
                    <li><a class="dropdown-item" href="#">Penyesuaian Stok</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown fw-bold" style="text-decoration: black; list-style: none;">
                <a class="nav-item text-reset" href="#" id="navbarGudang" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: black;">
                Gudang
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarGudang" style="text-decoration: none;">
                    <li><a class="dropdown-item" href="#">Produk Mentah</a></li>
                    <li><a class="dropdown-item" href="#">Produk Jadi</a></li>
                    <li><a class="dropdown-item" href="#">Retur Produk</a></li>
                </ul>
            </li>
            <a class="nav-item fw-bold clicked" href="pegawai" style="text-decoration: none;">Pegawai</a>
            <a class="nav-item fw-bold clicked" href="customer" style="text-decoration: none;">Customer</a>
            <li class="nav-item dropdown fw-bold clicked" style="text-decoration: black; list-style: none; ">
                <a class="nav-item text-reset" href="#" id="navbarLaporan" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: black;">
                Laporan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarLaporan" style="text-decoration: none;">
                    <li><a class="dropdown-item" href="#">Stok Masuk-Keluar</a></li>
                    <li><a class="dropdown-item" href="#">Penjualan</a></li>
                    <li><a class="dropdown-item" href="#">Retur Produk</a></li>
                    <li><a class="dropdown-item" href="#">Konversi Stok</a></li>
                </ul>
            </li>
        </nav>
    </div>
</body>
</html>

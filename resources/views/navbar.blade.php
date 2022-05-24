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
            font-size: 20px;
        }
        .dropdown-item{
            color: black;
            font-size: 17px;
        }
        .nav-item:hover {
            color: #FF0000;
        }
        .clicked:active{
            color: #FF0000;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0; /* remove the gap so it doesn't close */
        }
    </style>
</head>
<body>
    {{-- <div class="mx-5" style="background-color: #d8d8d8"> --}}
        <nav class="navbar navbar-collapse dark" style="background-color: #d8d8d8">
            {{-- <a class="nav-link ms-5" href="/home"><img src="img\logo_toko_cendana.png" alt="" class="ms-5" style="width: 60px; text-align: left;"></a> --}}

            <li class="nav-item dropdown fw-bold ms-5" style="text-decoration: black; list-style: none;">
                <a class="nav-item text-reset" href="/home" id="navbarToko" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: black;">
                    <img src="img\logo_toko_cendana.png" alt="" class="ms-5" style="width: 60px; text-align: left;">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarToko" style="text-decoration: none;">
                    <li><a class="dropdown-item" href="#profile">{{ session()->get('login') }}</a></li>
                    <li><a class="dropdown-item" href="/home">Home</a></li>
                    <li><a class="dropdown-item" href="/">Log Out</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown fw-bold" style="text-decoration: black; list-style: none;">
                <a class="nav-item text-reset" href="#" id="navbarToko" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: black;">
                Toko
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarToko" style="text-decoration: none;">
                    <li><a class="dropdown-item" href="/transaksijual">Transaksi Jual</a></li>
                    <li><a class="dropdown-item" href="/konversi">Konversi Stok</a></li>
                    <li><a class="dropdown-item" href="/penyesuaistok">Penyesuaian Stok</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown fw-bold" style="text-decoration: black; list-style: none;">
                <a class="nav-item text-reset" href="#" id="navbarGudang" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: black;">
                    Gudang
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarGudang" style="text-decoration: none;">
                    <li><a class="dropdown-item" href="/produkmentah">Produk Mentah</a></li>
                    <li><a class="dropdown-item" href="/produkjadi">Produk Jadi</a></li>
                    <li><a class="dropdown-item" href="/retur">Retur Produk</a></li>
                </ul>
            </li>
            <a class="nav-item fw-bold clicked" href="/pegawai" style="text-decoration: none;">Pegawai</a>
            <a class="nav-item fw-bold clicked" href="/customer" style="text-decoration: none;">Customer</a>
            <li class="nav-item dropdown fw-bold clicked me-5" style="text-decoration: black; list-style: none; ">
                <a class="nav-item text-reset me-5" href="#" id="navbarLaporan" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: black;">
                Laporan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarLaporan" style="text-decoration: none;">
                    <li><a class="dropdown-item" href="/laporanmasukproduk">Stok Masuk-Keluar</a></li>
                    <li><a class="dropdown-item" href="/laporanpenjualan">Penjualan</a></li>
                    <li><a class="dropdown-item" href="/laporanreturproduk">Retur Produk</a></li>
                    <li><a class="dropdown-item" href="/laporankonversistok">Konversi Stok</a></li>
                </ul>
            </li>
        </nav>
    {{-- </div> --}}
    <p class="position-fixed bottom-0 start-50 translate-middle-x fw-bold" style="font-size: 1vw">Cendana Snack</p>
</body>
</html>

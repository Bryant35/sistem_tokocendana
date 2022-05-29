<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Mentah - Cendana Snack</title>
    <link rel="stylesheet" href="css/ins-up-del.css">
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Produk Mentah</h1>
        <hr>
        <div class="row">
            <div class="col-8" style="margin-bottom: 15px;">
                <div class="card">
                    <div class="card-body" style="background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Detail</h5>
                        <table class="table table-striped table-hover border rounded">
                            <thead>
                                <tr>
                                    <th scope="col">ID Produk Mentah</th>
                                    <th scope="col">ID Konversi</td>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Jenis Produk</th>
                                    <th scope="col">Jumlah Produk</th>
                                    <th scope="col">Tanggal Expire</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_produkmentah as $listmentah)
                                    <tr>
                                        <th scope="row">{{$listmentah->MENTAH_ID}}</th>
                                        <td>{{$listmentah->KONVERSI_ID}}</td>
                                        <td>{{$listmentah->NAMA_PRODUK}}</td>
                                        <td>{{$listmentah->JENIS_PRODUK}}</td>
                                        <td>{{$listmentah->JML_PRODUK}}</td>
                                        <td>{{$listmentah->EXPIRED_PRODUK}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <button type="button" class="block">Insert</button>
                        <button type="button" class="block">Update</button>
                        <button type="button" class="block">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

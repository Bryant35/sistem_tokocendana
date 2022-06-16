<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Penjualan - Toko Cendana</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/ins-up-del.css">
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Transaksi Penjualan</h1>
        <hr>
        <div class="row">
            <div class="col-8">
                <div class="card-body" style="background-color: #EBEBEB; margin-bottom:15px;">
                    <h5 class="text-center card-title fw-bold">Detail</h5>
                    <table class="table table-striped table-hover border rounded">
                        <thead>
                            <tr>
                                <th>ID Jual</td>
                                <th scope="col">ID Customer</th>
                                <th scope="col">Jumlah Produk</th>
                                <th scope="col">Total Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_penjualan as $listjual)
                                <tr>
                                    <th>{{$listjual->ID_Jual}}</th>
                                    <td>{{$listjual->ID_Customer}}</td>
                                    <td>{{$listjual->Jumlah_Produk}}</td>
                                    <td>{{$listjual->Total_Jual}}</td>
                                    <form action="/detailpenjualan" method="POST">
                                        @csrf
                                        <input type="hidden" name="updateitem" id="updateitem" value="{{$listjual->ID_Jual}}">
                                        <td><input type="submit" value="View"></td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body" style="height: 180px; background-color: #EBEBEB;">
                        <a href="/insertcustbeli" style="text-decoration: none; color: black;"><button type="button" class="block">Insert</button></a>
                        {{-- <a href="/deletetransaksijual" style="text-decoration: none; color: black;"><button type="button" class="block">Delete</button></a> --}}
                    </div>
                </div>
                {{-- <div class="row d-flex justify-content-center mt-4">
                    <div class="col-auto"><button class="btn" id="minus">−</button></div>
                    <div class="col-auto">
                        <form action="" method="">
                            <input type="number" class="form-control text-center shadow bg-body" style="width: 100px" min="0" value="0" id="input" name="input" />
                        </form>
                    </div>
                    <div class="col-auto"><button class="btn" id="plus">+</button></div>
                </div> --}}
            </div>
        </div>
    </div>
    <script>
        // const select = document.getElementById('selectrow');
        // const update = document.getElementById('updateitem');
        // var id = document.getElementById('jualid').values();


        // id.addEventListener('click', event => {
        //     event.preventDefault();
        //     updateitem.value = id;
        // });

        // function updateitem(id){
        //     update.value = id;
        // }
    </script>
</body>
</html>

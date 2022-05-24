<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Penjualan - Toko Cendana</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Transaksi Penjualan</h1>
        <div class="row">
            <div class="col-8">
                <table class="table table-hover border rounded">
                    <thead>
                        <tr>
                            <th scope="col">ID Customer</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Jumlah Produk</th>
                            <th scope="col">Total Jual</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $page = 0;
                            if(isset($_REQUEST['page'])){
                                $page = $_REQUEST['page'];
                            }
                            Log::alert($page);
                            $table_start = $page * 15;
                            $table_end = $table_start + 15;
                        ?>
                        @foreach(array_slice($data_penjualan, $table_start, $table_end) as $listjual)
                        <tr>
                            <th scope="row">{{$listjual->ID_Customer}}</th>
                            <td>{{$listjual->Nama_Produk}}</td>
                            <td>{{$listjual->Harga_Jual}}</td>
                            <td>{{$listjual->Jumlah_Produk}}</td>
                            <td>{{$listjual->Total_Jual}}</td>
                        </tr>
                        @endforeach
                        {{-- @for ($i = 0; $i < 15; $i++)
                        <tr>
                            <th scope="row">{{$data_penjualan->ID_Customer}}</th>
                            <td>{{$data_penjualan->Nama_Produk}}</td>
                            <td>{{$data_penjualan->Harga_Jual}}</td>
                            <td>{{$data_penjualan->Jumlah_Produk}}</td>
                            <td>{{$data_penjualan->Total_Jual}}</td>
                        </tr>
                        @endfor --}}
                        {{-- <tr>
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
                        </tr> --}}
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
                <div class="row d-flex justify-content-center mt-4">
                    <div class="col-auto"><button class="btn" id="minus">−</button></div>
                    <div class="col-auto">
                        <form action="" method="GET">
                            <input type="number" class="form-control text-center shadow bg-body" style="width: 100px" min="0" value="0" id="input" name="input" />
                        </form>
                    </div>
                    <div class="col-auto"><button class="btn" id="plus">+</button></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const minusButton = document.getElementById('minus');
        const plusButton = document.getElementById('plus');
        const inputField = document.getElementById('input');

        minusButton.addEventListener('click', event => {
            event.preventDefault();
            if (inputField.value == "0") {
                document.getElementById("minus").classList.toggle("disabled");
            }
            else{
                const currentValue = Number(inputField.value) || 0;
                inputField.value = currentValue - 1;
            }
        });

        plusButton.addEventListener('click', event => {
            event.preventDefault();
            document.getElementById("minus").classList.remove("disabled");
            const currentValue = Number(inputField.value) || 0;
            inputField.value = currentValue + 1;
            //convert the value of the input field to php value

        });

        $(document).ready(function() {
            $('#input').change(function(e) {
                // e.preventDefault();
                var page = $('#input').val();
                $.ajax({
                    type: "GET",
                    url: '/transaksijual',
                    data: $(this).val(),
                    success: function(data) {
                        // alert('page ke ' + page);
                    },
                    error: function() {
                        alert('There was some error performing the AJAX call!');
                    }
                });
            });
        });
    </script>
</body>
</html>

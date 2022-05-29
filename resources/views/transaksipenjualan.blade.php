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
                <div class="card-body" style="background-color: #EBEBEB;">
                    <h5 class="text-center card-title fw-bold">Detail</h5>
                    <table class="table table-striped table-hover border rounded">
                        <thead>
                            <tr>
                                <th scope="col">ID Customer</th>
                                <td>ID Jual</td>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga Jual</th>
                                <th scope="col">Jumlah Produk</th>
                                <th scope="col">Total Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // $page = document.getElementByID("input");
                                // if(isset($_GET['#input'])){
                                //     $page = $_GET['#input'];
                                // }
                                // $table_start = $page * 15;
                                // $table_end = $table_start + 15;
                                // echo "<input type='text' id='table_start' value='{$page}'>";
                                // $server = "139.255.11.84";
                                // $username = "student";
                                // $password = "isbmantap";
                                // $dbname = "SAD_ERIKSON";
                                // $conn = new mysqli($server, $username, $password, $dbname);
                                // $jual_id = $_GET['jual_id'];
                                // $sql = "SELECT PRODUK_ID, JUAL_ID, QTY_JUAL, HARGA_JUAL, DISKON_JUAL FROM DETAIL_JUAL WHERE JUAL_ID = '$jual_id'";
                                // $result = $conn->query($sql);

                            ?>
                                {{-- @foreach(array_slice($data_penjualan, 0, 15) as $listjual) --}}
                                @foreach($data_penjualan as $listjual)
                                <tr>
                                    <th scope="row">{{$listjual->ID_Customer}}</th>
                                    <td id="jualid">{{$listjual->ID_Jual}}</td>
                                    <td>{{$listjual->Nama_Produk}}</td>
                                    <td>{{$listjual->Harga_Jual}}</td>
                                    <td>{{$listjual->Jumlah_Produk}}</td>
                                    <td>{{$listjual->Total_Jual}}</td>
                                    <td><a href="" data-bs-target="#exampleModal" data-bs-toggle="modal">Detail</a></td>
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
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <a type="button" class="block">Insert</a>
                        <button type="button" class="block" >Update</button>
                        <button type="button" class="block">Delete</button>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <table class="table table-hover border">
                        <thead>
                            <tr>
                                <th scope="col">ID Produk</th>
                                <th scope="col">ID Jual</td>
                                <th scope="col">Quantity</th>
                                <th scope="col">Harga Jual</th>
                                <th scope="col">Diskon Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_penjualan as $detailjual)
                                @if ($detailjual->JUAL_ID == $listjual->ID_Jual)
                                    <tr>
                                        {{-- <th scope="row">{{$detailjual->CUST_ID}}</th> --}}
                                        <td id="idjual2">{{$detailjual->JUAL_ID}}</td>
                                        <td>{{$detailjual->PRODUK_ID}}</td>
                                        <td>{{$detailjual->HARGA_JUAL}}</td>
                                        <td>{{$detailjual->QTY_JUAL}}</td>
                                        <td>{{$detailjual->DISKON_JUAL}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <script>
        const minusButton = document.getElementById('minus');
        const plusButton = document.getElementById('plus');
        var inputField = document.getElementById('input');

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


        // $(document).ready(function() {
        //     $('#input').change(function(e) {
        //         // e.preventDefault();
        //         var page = $('#input').val();
        //         $.ajax({
        //             // type: "GET",
        //             url: '/transaksijual',
        //             data: $(this).val(),
        //             success: function(data) {
        //                 // alert('page ke ' + page);
        //                 $('#input').val(data);
        //             },
        //             error: function() {
        //                 alert('There was some error performing the AJAX call!');
        //             }
        //         });
        //     });
        // });
    </script>
</body>
</html>

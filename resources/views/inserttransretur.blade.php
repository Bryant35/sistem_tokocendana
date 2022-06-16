<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Transaksi Retur - Cendana Snack</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Insert Transaksi Retur  / {{$split_id[1]}}</h1>
        <form action="/insertretur" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Produk</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col" class="text-center">QTY Retur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for($i = 0; $i < count($detail_penjualan); $i++)
                                    <tr>
                                        <th scope="row" class="align-middle">{{$detail_penjualan[$i]->PRODUK_ID}}</th>
                                            <td class="align-middle">{{$detail_penjualan[$i]->NAMA_PRODUK}}</td>
                                            <td class="text-center align-middle"><input type="text" class="align-middle text-center col-2" value="{{$detail_penjualan[$i]->QTY_JUAL}}"></td>
                                                <input type="hidden" name="id_produk" value="{{$detail_penjualan[$i]->PRODUK_ID}}">
                                                <input type="hidden" name="id_retur" value="{{$detail_penjualan[$i]->JUAL_ID}}">
                                                {{-- <td class="align-middle text-center"><input type="checkbox" class="btn link-danger text-center" style="text-decoration: underline;" value=""></td> --}}
                                        {{-- <form action="/insert_retur" method="POST">
                                            @csrf

                                            -  -
                                        </form> --}}
                                    </tr>
                                    @endfor
                                    {{-- @foreach ($detail_penjualan as $data)
                                    <tr>
                                        <th scope="row" class="align-middle">{{$data->PRODUK_ID}}</th>
                                            <td class="align-middle">{{$data->NAMA_PRODUK}}</td>
                                            <td class="text-center align-middle"><input type="text" class="align-middle text-center col-2" value="{{$data->QTY_JUAL}}"></td>
                                                <input type="hidden" name="id_produk" value="{{$data->PRODUK_ID}}">
                                                <input type="hidden" name="id_retur" value="{{$data->JUAL_ID}}">
                                                <td class="align-middle text-center"><input type="checkbox" class="btn link-danger text-center" style="text-decoration: underline;" value=""></td>

                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 mb-5">
                <div class="col">
                    <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                </div>
                <div class="col-1" style="display: flex;justify-content: flex-end;">
                    <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Retur">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

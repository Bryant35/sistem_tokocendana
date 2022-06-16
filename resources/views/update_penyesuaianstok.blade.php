<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Penyesuaian Stok Produk Mentah - Cendana Snack</title>
    <link rel="stylesheet" href="{{ asset('css/updatepenstok.css') }}">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold mt-2 mb-4">Update Penyesuaian Stok</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <h2 class=" card-title fw-bold">Produk Mentah/<a href="/updatepenyesuaistokjadi" style="text-decoration: none;"><span>Produk Jadi</span></a></h2>
                        <br>
                        <form action="/penyesuaianprodukmentah" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col col-lg-2""><h5>ID Produk Mentah: </h5></div>
                                <div class="col-8">
                                    <input type="name" name="id_produk_mentah" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search ID Produk Mentah">
                                    <datalist id="idLIST">
                                    @foreach ($produk_show as $produk)
                                        <option value="{{$produk->MENTAH_ID}} - {{$produk->NAMA_PRODUK}}">
                                    @endforeach
                                    </datalist>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col col-lg-2""><h5>Jumlah Produk Rusak : </h5></div>
                                <div class="btn-group col-auto" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary" id="minus">-</button>
                                    {{-- <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"> --}}
                                    <input type="number" name="qty" class="text-center" style="width: 100px" min="0" value="0" id="input"/>
                                    <button type="button" class="btn btn-outline-primary" id="plus">+</button>
                                </div>
                                {{-- <div class="col-auto"><button class="btn" >−</button></div>
                                <div class="col-auto">
                                    <input type="number" class="form-control text-center shadow bg-body" style="width: 100px" min="0" value="0" id="input"/>
                                </div>
                                <div class="col-auto"><button class="btn" id="plus">+</button></div> --}}

                            </div>
                            <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                                <div class="col">
                                    <input type="submit" class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Update">
                                </div>
                                <div class="col">
                                    <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if(session()->has('success'))
            {{-- <div class="alert alert-success" role="alert">
                {{session()->get('success')}}
            </div> --}}
        @elseif(session()->has('error'))
            {{-- <div class="alert alert-danger" role="alert">
                {{session()->get('error')}}
            </div> --}}
        @else

        @endif
    </div>
    <script>
        // function myFunction() {
        //     document.getElementById("myDropdown").classList.toggle("show");
        // }

        // function filterFunction() {
        //     var input, filter, ul, li, a, i;
        //     input = document.getElementById("myInput");
        //     filter = input.value.toUpperCase();
        //     div = document.getElementById("myDropdown");
        //     a = div.getElementsByTagName("a");
        //     for (i = 0; i < a.length; i++) {
        //         txtValue = a[i].textContent || a[i].innerText;
        //         if (txtValue.toUpperCase().indexOf(filter) > -1) {
        //         a[i].style.display = "";
        //         } else {
        //         a[i].style.display = "none";
        //         }
        //     }
        // }
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
        });
    </script>
</body>
</html>

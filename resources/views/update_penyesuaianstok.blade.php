<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Penyesuaian Stok - Cendana Snack</title>
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
        <h1>Update Penyesuaian Stok</h1>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <h2 class=" card-title fw-bold">Produk Mentah/<span>Produk Jadi</span></h2>
                        <br>
                        <div class="row">
                            <div class="col col-lg-2""><h5>ID Produk : </h5></div>
                            <div class="col-8">
                                <input type="name" name="id_produk_mentah" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search ID Produk">
                                <datalist id="idLIST">
                                    <option value="PAM001">
                                    <option value="PAJ001">
                                    <option value="Alexa Wong">
                                    <option value="Andini Triapsari">
                                    <option value="Denisa">
                                </datalist>
                            </div>
                        </div>

                        {{-- <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                            <div id="myDropdown" class="dropdown-content">
                              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                              <a href="#about">ID</a>
                            </div>
                        </div> --}}
                        <br>
                        <div class="row">
                            <div class="col col-lg-2""><h5>Jumlah Produk : </h5></div>
                            <div class="col-auto"><button class="btn" id="minus">−</button></div>
                            <div class="col-auto">
                            <input type="number" class="form-control text-center shadow bg-body" style="width: 100px" min="0" value="0" id="input"/>
                            </div>
                            <div class="col-auto"><button class="btn" id="plus">+</button></div>

                        </div>
                        <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;">Update</div>
                            </div>
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login - Toko Cendana</title>
    <link rel="shortcut icon" href="img/logo_toko_cendana.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="parent">
            <div id="square">
                <div id="square2" style="margin-top: -12%; margin-left: -10%">
                    <img src="img/logo_toko_cendana.png" alt="" class="img-logo d-print-block">
                    <form action="/checklogin" method="POST">
                        @csrf
                        <div class="row g-3 mt-5 ms-5">
                            <div class="col-1">
                                <label for="inputID" class="col-form-label fw-bold">ID</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="idpegawai" id="inputID" class="form-control" required>
                            </div>
                        </div>
                        <div class="row g-3 mt-2 ms-5">
                            <div class="col-1">
                                <label for="password" class="col-form-label fw-bold">Pass</label>
                            </div>
                            <div class="col-9">
                                <input type="password" name="password" id="password" class="form-control" data-toggle="password" required>
                              {{-- <input type="checkbox" for="password">Show Password --}}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-5 bttn-sub">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- <p class="position-absolute bottom-0 start-50 translate-middle-x fw-bold">Cendana Snack</p> --}}
    </div>
</body>
</html>

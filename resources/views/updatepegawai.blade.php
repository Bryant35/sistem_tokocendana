<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Pegawai - Cendana Snack</title>
</head>
@include('navbar')
<body>
    <div class="container">
        <h1 class="fw-bold">Update Pegawai</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height:550px; background-color: #EBEBEB;">
                        <div class="row">
                            <div class="col-6 col-sm-3"><h5>ID Pegawai: </h5></div>
                            <div class="col-4 ">
                                    <input type="name" name="id_pegawai" style="background-color: #F4F9FF;" list="idLIST" id="pilih_id" class="form-control dropbtn shadow bg-body" placeholder="Search ID Pegawai">
                                    <datalist id="idLIST">
                                        <option value="AS001">
                                        <option value="AJ001">
                                        <option value="AM001">
                                        <option value="DD001">
                                        <option value="DW001">
                                    </datalist>
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="namapegawai"><h5>Nama Pegawai:</h5></label>
                                <input class="col-auto" type="text" id="namapegawai" name="namapegawai" required maxlength="30" size="30">
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="jobpegawai"><h5>Job Pegawai:</h5></label>
                                <input class="col-auto" type="text" id="jobpegawai" name="jobpegawai" required maxlength="30" size="30">
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <form action="">
                                <label class="col-6 col-sm-3" for="passpegawai"><h5>Password Pegawai:</h5></label>
                                <input class="col-auto" type="password" id="passpegawai" name="passpegawai">
                            </form>
                        </div>
                        <br>
                        <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
                            </div>
                            <div class="col">
                                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;">Update</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
